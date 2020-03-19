<?php

$data = json_decode(file_get_contents(__DIR__ . '/../data/commands.json'), true);
$template = file_get_contents(__DIR__ . '/../data/RequestTemplate.tmpl');

foreach($data['commands'] as $command){
    $className = ucfirst(str_replace(
        $data['keywords'],
        array_map('ucfirst', $data['keywords']),
        $command
    )).'Request';
    $help = shell_exec("echo \"help {$command}\" | nc 172.25.16.1 10011 -q1");
    preg_match('|Usage: [a-z]+ (.*)|', $help, $matches);

    if(isset($matches[1])){
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
        $defineParams[] = "public \${$parameter['phpName']};";
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
}

function parseParameters($rawParameters){
    $parameters = [];
    foreach($rawParameters as $parameter){
        $paramConfig = [];
        if(substr($parameter, 0, 1) === '['){
            $paramConfig['isOptional'] = true;
            $parameter = substr($parameter, 1, -1);
        }else{
            $paramConfig['isOptional'] = false;
        }
        $paramConfig['name'] = $parameter;
        $paramConfig['isFlag'] = strpos($parameter, '=') === false;
        if($paramConfig['isFlag']){
            $paramConfig['phpName'] = substr($parameter, 1);
        }else{
            $paramConfig['phpName'] = explode("=", $parameter)[0];
        }
        $parameters[] = $paramConfig;
    }
    return $parameters;
}