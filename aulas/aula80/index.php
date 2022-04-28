<?php

function error_handler($code, $message, $file, $line){
    echo json_encode(
        array(
            "codigo"=>$code,
            "mensagem"=>$message,
            "arquivo"=>$file,
            "linha"=>$line
        )
    );
}

set_error_handler("error_handler");

$total = 100 / 0;

?>