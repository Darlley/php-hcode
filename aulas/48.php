<?php // Interface

    interface Veiculo {
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);
    }

    class Civic implements Veiculo {
        public function acelerar($velocidade){
            echo "Acelerou $velocidade" . '<br>';
        }

        public function freiar($velocidade){
            echo "Freiou $velocidade" . '<br>';
        }
        public function trocarMarcha($marcha){
            echo "$marcha º marcha" . '<br>';
        }
    }

    $carro = new Civic();
    
    $carro->acelerar('40km');
    $carro->freiar('20km');
    $carro->trocarMarcha(2);
