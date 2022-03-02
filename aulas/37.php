<?php // Função anonima

    function testar($callback){
        $callback();
    }

    testar(function(){
        echo "testar()";
    });

    $fn = function($a){
        var_dump($a);
    };

    $fn("fn()");