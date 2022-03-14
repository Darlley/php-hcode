<?php 

    class Gol implements Automovel {
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