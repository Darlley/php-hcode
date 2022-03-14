<?php // Polimorfismo

    // Polimorfismo é quando métodos com o mesmo nome, em classes diferentes, fazem rotinas diferentes

    abstract class Animal {
        public function falar(){
            return "Som";
        }

        public function andar(){
            return "Andou";
        }
    }

    class Cachorro extends Animal {
        public function falar(){
            return "Latir";
        } // este é o método polimorfico
    }

    $pluto = new Cachorro();
    echo $pluto->falar(); 

    echo '<br> --------------------------------- <br>';

    class Gato extends Animal {
        public function andar(){
            return "Garfield rodou";
        } // este é o método polimorfico
    }


    $garfield = new Gato();
    echo $garfield->falar();
    echo $garfield->andar();


    echo '<br> -------------------------------- <br>';

    class Passaro extends Animal {
        public function falar(){
            return "Piou";
        } // este é o método polimorfico

        public function andar(){
            return "Voa e " . parent::andar(); // concatenação de metodos filho (extends) e pai (parent)
        } // este é o método polimorfico
    }


    $twitter = new Passaro();
    echo $twitter->falar();
    echo $twitter->andar();