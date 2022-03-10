<?php // Encapsulamento

    /*
    As 3 formas de caessar atributos e metodos:
    Atributose métodos da mesma classe
    Atributos e metodos das classes extendiadas
    Atributos e métodos acessados por objeto     

    */

    class Pessoa {

        public $nome = "Darlley"; // public todo mundo vê
        protected $idade = 23; // protected é visto pelos da mesma classe e classe extendida
        private $senha = 'dev123'; // private só é visto pela mesma classe

        public function mostrar(){
            // metodo da mesma classe que os atributos então enxerga tudo
            echo $this->nome . '<br>';
            echo $this->idade . '<br>';
            echo $this->senha . '<br>';
        }

    }

    
    // EXEMPLO 2
    class Programador extends Pessoa {
        // A classe Programador extende tudo da classe Pessoa, exceto os atributos e métodos privados
        
        public function mostrar(){
            
            echo get_class($this) . '<br>';
            
            echo $this->nome . '<br>';
            echo $this->idade . '<br>';
            echo $this->senha . '<br>';
        }
    }

    $estudante = new Programador();
    echo $estudante->nome . '<br>';
    // echo $estudante->idade . '<br>';
    // echo $estudante->senha . '<br>';
    echo $estudante->mostrar();
