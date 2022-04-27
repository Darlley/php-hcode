<?php

    $data = array(
        "empresa" => "HCode Treinamento"
    );

    setcookie("Testes", json_encode($data), time() + 3600);

    echo "ok";