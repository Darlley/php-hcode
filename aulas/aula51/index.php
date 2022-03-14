<?php

    spl_autoload_register(function($className){
        require_once("./$className.php");
    });

    $carro = new Gol();
    $carro->acelerar(10);