<?php

    interface Veiculo {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);
    }

    class Carro implements Veiculo {
        private $velocidade = 0;

        public function acelerar($velocidade){
            $this->velocidade += $velocidade;
            echo "Acelerou $velocidade. O carro esta a ". $this->velocidade ." km/m <br>";
        }

        public function frenar($velocidade){
            $this->velocidade -= $velocidade;
            echo "Frenou $velocidade. O carro esta a ". $this->velocidade ." km/m <br>";
        }

        public function trocarMarcha($marcha){
            echo $marcha . "º marcha <br>";
        }
    }

    $civic = new Carro();
    $civic->acelerar(60);
    $civic->trocarMarcha(4);
    $civic->frenar(20);
    $civic->trocarMarcha(2);