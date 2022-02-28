<?php // Parâmetros de função

function mostrar($texto = "mundo", $periodo = "Bom dia"){
    return "Olá $texto, $periodo!";
}
echo mostrar();
echo mostrar("", "Boa Noite");
echo mostrar("Darlley", "");

// os argumentos obrigatórios (que não tem um valor padrão) devem ficar mais a esquerda

function montar_array(){
    return func_get_args();
}

var_dump( montar_array("Olá", 10, "0", null) );

