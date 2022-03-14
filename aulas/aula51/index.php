<?php

    spl_autoload_register(function($className){
        if(file_exists("abstract". DIRECTORY_SEPARATOR . "$className.php")){
            require_once("./abstract" . DIRECTORY_SEPARATOR ."$className.php");
        }else{
            require_once("./$className.php");
        }
    });

    $carro = new Gol();
    $carro->acelerar(10);