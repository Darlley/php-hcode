<?php // Orientação a objetos

/*
    As variaveis no contexto da classe se chamam Atributos
    A restrição do acesso a alguns atributos se chama Encapsulamento
    As funções no contexto da classe se chama Metodo
    Uma classe é um conjunto de Atributos e Metodos
    Na prática, uma classe é uma variavel com um objeto instanciado = new Object
*/

class Pessoa {
    // Atributos
    public $nome;

    // Metodos
    public function falar(){
        return "O meu nome é $this->nome.";
    }
}

$Darlley = new Pessoa();
$Darlley->nome = "Darlley Brio";
echo $Darlley->falar();