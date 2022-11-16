<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = "/classes";
    $extenstion = ".class.php";
    $filename = $path . $className . $extenstion;

    if(file_exists($filename)){
        return false;
    }

    include_once $filename;

}

