<?php
spl_autoload_register(
    function($className) {
        $fileName = __DIR__ . '/' .  str_replace('\\', '/', $className) . ".php";
        if(file_exists($fileName))
        {
            require_once($fileName);
        }
        else
        {
            echo "$fileName not found<br>\n";
        }
    }
);

use src\Controller\HelloController;

$controller = new HelloController();
$controller->index();
