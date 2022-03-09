<?php 
    // Métodos Mágicos (coisas que acontecem sem que você veja)
    // todo metodo mágico começa com __, você usa um objetos e ocorre uma chamada a um metodo toda vez que um objeto é usado

    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        // método construtor (o nome da classe até o PHP5 e o __construct no PHP7)
        public function __construct($logradouro, $numero, $cidade){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        } // método mágico de instanciação

        public function __destruct(){
            var_dump('destruir');
        } // método mágico de destruição

        public function __toString(){
            return $this->logradouro. ", " . $this-> numero . ", " . $this->cidade;
        } // método mágico de chamada
    }


    $endereco = new Endereco('Rua Acrópole', 1783, 'Campo Grande, MS');
    var_dump($endereco);
    echo '<br>' .$endereco . '<br>';
    unset($endereco); // chamou destruct
