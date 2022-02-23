<?php // JSON

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Fulano',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Ciclano',
    'idade' => 22
));

// echo json_encode($pessoas);


$json = '[
    {
        "nome": "Fulano",
        "idade": 20
    },
    {
        "nome": "Ciclano",
        "idade": 22
    }
]';

var_dump(json_decode($json, true));