<?php

require __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$adapter = new \Dragony\TeamspeakApi\Http\TeamspeakAdapter('http://BAB5cmHaIYXZgCbRTqOaAECzBAz2VGSmVKDdOCd@localhost:10080');

$clientListRequest = new \Dragony\TeamspeakApi\Request\ClientListRequest();

$adapter->setServerId(1);

var_dump($adapter->request($clientListRequest));