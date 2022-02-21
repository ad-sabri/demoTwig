<?php

require __DIR__ . '/../vendor/autoload.php';

use LocalUser\DemoTwig\Controller\DefaultController;

$path = $_GET['path'];


if($path == '') {
    echo (new DefaultController())->home();
}

else if($path == 'contact'){
    echo (new DefaultController())->contact();
    //var_dump($path);
}

else {
    http_response_code(404);
}

