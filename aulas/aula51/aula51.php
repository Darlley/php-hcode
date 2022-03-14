<?php // Autoload

    // Metodo Mágico Autoload
    // __autoload esta OBSOLETA A PARTIRDO PHP8

    spl_autoload_register(
        function($class){

            if (file_exists($class.".php")) {
                require_once($class.".php");
            }
            
        }
    );

    $carro = new Fusion();
    $carro->empurrar(20);