<?php // Autoload

    // Metodo Mágico Autoload
    // __autoload esta OBSOLETA A PARTIRDO PHP8
    // para PHP8 use spl_autoload_register

    spl_autoload_register(
        function($class){

            if (file_exists("abstract". DIRECTORY_SEPARATOR . "$class.php")) {
                require_once("abstract".DIRECTORY_SEPARATOR."$class.php");
            }else{
                require_once("$class.php");
            }
            
        }
    );

    $carro = new Fusion();
    $carro->empurrar(20);