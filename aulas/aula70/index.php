<?php

    $name = "images";

    if(!is_dir($name)){
        mkdir($name);
        echo "Diretório $name criado com sucesso :)";

    }else{

        echo "O diretório $name ja existia :/ mas nós ao apagamos, tente novamente ;)";
        rmdir($name);
    }