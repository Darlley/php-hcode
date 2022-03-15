<?php

    spl_autoload_register(function($class){

        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        $dir_class = "class";
        $file_name = $dir_class . DIRECTORY_SEPARATOR . "$class.php";

        var_dump($file_name);

        if(file_exists($file_name)){
            require_once($file_name);
        }

    });