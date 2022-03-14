<?php 

    interface Veiculo {
        public function acelerar($velocidade):int;
        public function frenar($velocidade):string;
        public function trocarMarcha($marcha);
    }

    abstract class Automovel implements Veiculo {

        public function acelerar($velocidade):int{
            return $velocidade;
        }

        public function frenar($velocidade):string{
            return "$velocidade";
        }

        public function trocarMarcha($marcha):string{
            return "$marcha";
        }
    }

    class Fusca extends Automovel {
        public function empurrar($distancia):int{
            return $distancia;
        }
    }

    $carro = new Fusca();
    echo $carro->acelerar('20') . '<br>';
    echo $carro->trocarMarcha('2') . '<br>';
    echo $carro->acelerar('40') . '<br>';
    echo $carro->trocarMarcha('4') . '<br>';
    echo $carro->frenar('40') . '<br>';
    echo $carro->trocarMarcha('2') . '<br>';
    echo $carro->frenar('20') . '<br>';
    echo $carro->trocarMarcha('0') . '<br>';
    echo $carro->empurrar(5) . '<br>';