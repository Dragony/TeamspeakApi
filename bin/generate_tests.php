<?php

require __DIR__ . '/../vendor/autoload.php';

$template = file_get_contents(__DIR__ . '/../data/TestTemplate.tmpl');

$requests = scandir(__DIR__ . '/../src/Request');
$namespace = 'Dragony\\TeamspeakApi\\Request\\';

foreach($requests as $request){
    if(in_array($request, ['.', '..'])){
        continue;
    }
    $className = substr($request, 0, -4);
    $classNamespace = $namespace.$className;
    $testClassName = $className.'Test';

    $vars = [
        '{request_namespace}' => $classNamespace,
        '{test_class}' => $testClassName,
        '{request_class}' => $className
    ];

    $testContent = str_replace(array_keys($vars), array_values($vars), $template);

    file_put_contents(__DIR__ . '/../tests/Request/'.$testClassName.'.php', $testContent);
}