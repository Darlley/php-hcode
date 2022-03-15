<?php

    spl_autoload_register(function($class){
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        $dir = "class";
        $file_name = $dir . DIRECTORY_SEPARATOR . "$class.php";

        if(file_exists($file_name)){
            require_once($file_name);
        }
    });