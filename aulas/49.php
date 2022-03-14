<?php

    interface Veiculo {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);
    }
    
    abstract class Automovel implements Veiculo {

        public function acelerar($velocidade){
            echo "Acelerou $velocidade" . '<br>';
        }

        public function frenar($velocidade){
            echo "Freiou $velocidade" . '<br>';
        }
        public function trocarMarcha($marcha){
            echo "$marcha º marcha" . '<br>';
        }

        // um objeto nunca instancia uma classe abstrata diretamente
        // o bjeto instancia uma classe que extende a classe abstrata
        // a classe abstrata ja diz quais metodos uma classe tem e o que eles fazem
    }

    class Fusion extends Automovel {
        public function empurrar($distancia){
            echo "Você empurrou o Fusion por $distancia km de distância";
        }
    }

    $carro = new Fusion();
    var_dump($carro);

    $carro->acelerar(40);
    $carro->trocarMarcha(4);
    $carro->frenar(15);
    $carro->trocarMarcha(2);
    $carro->empurrar(5);

    $carro = new Automovel();