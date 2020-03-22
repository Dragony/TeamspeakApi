<?php

$data = json_decode(file_get_contents(__DIR__ . '/../data/commands.json'), true);
$template = file_get_contents(__DIR__ . '/../data/RequestTemplate.tmpl');

foreach($data['commands'] as $command){
    $className = ucfirst(str_replace(
        $data['keywords'],
        array_map('ucfirst', $data['keywords']),
        $command
    )).'Request';
    $help = shell_exec("echo \"help {$command}\" | nc 192.168.144.1 10011 -q1");
    preg_match('|Usage: [a-z]+ (.*)Permissions:|s', $help, $matches);

    if(isset($matches[1])){
        // Fix multiline parameter lists
        $matches[1] = preg_replace('|[ ]{2,10}|', ' ', str_replace(["\r", "\n"], '', trim($matches[1])));
        $rawParameters = explode(" ", $matches[1]);
        $parameters = parseParameters($rawParameters);
    }else{
        $parameters = [];
    }

    $constructParams = [];
    foreach($parameters as $parameter){
        $type = $parameter['isFlag'] ? 'bool ' : '';
        $constructParams[] = $type.'$' . $parameter['phpName'] . ($parameter['isOptional'] ? ' = null' : '');
    }

    $defineParams = [];
    foreach($parameters as $parameter){
        $descr = empty($parameter['description']) ? '' : " /* {$parameter['description']} */";
        $defineParams[] = "public \${$parameter['phpName']};{$descr}";
    }

    $initParams = [];
    foreach($parameters as $parameter){
        $initParams[] = "\$this->{$parameter['phpName']} = \${$parameter['phpName']};";
    }

    $replace = [
        '{namespace}' => 'Dragony\\TeamspeakApi\\Request',
        '{classname}' => $className,
        '{construct_params}' => implode(", ", $constructParams),
        '{define_params}' => implode("\r\n\t", $defineParams),
        '{init_params}' => implode("\r\n\t\t", $initParams),
        '{command_name}' => $command
    ];

    file_put_contents(__DIR__ . '/../src/Request/' . $className . '.php', str_replace(array_keys($replace), array_values($replace), $template));
    echo "Wrote {$className}\n";
}

function parseParameters($rawParameters){
    $parameters = [];
    foreach($rawParameters as $parameter){
        $paramConfig = [];
        if(substr($parameter, 0, 1) === '['){
            if(strpos($parameter, '...') !== false){
                $paramConfig['isArray'] = true;
                $paramConfig['isOptional'] = false;
            }else{
                $paramConfig['isOptional'] = true;
            }
            $parameter = substr($parameter, 1, -1);
        }else{
            $paramConfig['isOptional'] = false;
            $paramConfig['isArray'] = false;
        }
        $paramConfig['name'] = $parameter;
        $paramConfig['isFlag'] = strpos($parameter, '=') === false;
        if($paramConfig['isFlag']){
            $paramConfig['phpName'] = substr($parameter, 1);
        }else{
            $paramConfig['phpName'] = explode("=", $parameter)[0];
        }
        preg_match('|\{(.*?)\}|', $parameter, $matches);
        $paramConfig['description'] = $matches[1] ?? '';
        $parameters[] = $paramConfig;
    }
    return $parameters;
}