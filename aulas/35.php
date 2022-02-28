<?php // tipagem de parâmetros(Declarações de tipos escalares) e declaração do tipo de retorno

function soma(int ...$valores):string {
    return array_sum($valores);
}

var_dump(soma(1, 1));
echo ' - '.soma(2, 2);


// O parâmtro (int ...$valores) diz que todos os parâmetros serão do mesmo tipo (inteiro)
// Vantagem: funcção dinâmica (da mesma forma que func_get_args)

