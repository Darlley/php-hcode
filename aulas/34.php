<?php // Parâmetros por valor e referência (&)

$a = 10;

function troca_valor(&$a){
    // &$a é a referência do endereço de memória da mesma variavel $a

    $a = 50;
    return $a;
}

echo troca_valor($a) . ' ' . $a;

$pessoa = array(
    'nome' => 'Darlley',
    'idade' => 23
);

foreach($pessoa as &$dados){
    
    if(gettype($dados) == 'integer') $dados += 10;
    echo "$dados, ";

}

print_r($pessoa);