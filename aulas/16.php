<?php 

    $nome = 'Darlley';
    function teste() {
        global $nome;
        echo $nome;
    }

    function teste2(){
        global $nome;
        $nome = 'Darlley Brito';
        echo $nome;
    }

    // teste();
    teste2();