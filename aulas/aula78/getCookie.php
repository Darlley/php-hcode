<?php

    if(isset($_COOKIE['Testes'])){
        $obj = json_decode($_COOKIE['Testes']);

        echo $obj->empresa;
    }

