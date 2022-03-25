<?php 

$file = fopen('log.text','a+');
fwrite($file, date("Y-m-d H:i:s") . "\r\n");
fclose($file);

if(file_exists("log.text")){
    echo "Arquivo log.text criado e alterado com sucesso!";
}