<?php

    abstract class Animal {
        public string $nome;

        public function falar():string{
            return "Som";
        }

        public function mover($distancia):string{
            return $this->nome . " se movimentou por $distancia metros";
        }

    }

    class Cachorro extends Animal {
        public function falar():string{
            return "Latir" . '<br>';
        }
    }

    class Gato extends Animal{
        public function falar():string{
            return parent::falar() . ": mia <br>";
        }
    }

    echo "<br> ================ <br>";
    $pluto = new Cachorro();
    $pluto->nome = "Pluto";
    echo $pluto->falar();
    echo $pluto->mover(10);

    echo " <br> ================ <br>";
    $garfield = new Gato();
    $garfield->nome = "Garfield Jr.";
    echo $garfield->falar();
    echo $garfield->mover(10);