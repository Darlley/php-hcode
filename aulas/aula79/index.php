<?php

try{

    throw new Exception("Houve um erro!", 400);

} catch(Exception $error) {
    echo json_encode(array(
        "message" => $error->getMessage(),
        "line" => $error->getLine(),
        "file" => $error->getFile(),
        "code" => $error->getCode()
    ));    
}