<?php

function trataNome($nome){
    if(!$nome){
        throw new Exception("Nenhum nome foi informado!", 400);
    }

    echo ucFirst($nome)."<br>";
}

try{
    trataNome("Darlley");
    trataNome("");
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Executou o try";
}