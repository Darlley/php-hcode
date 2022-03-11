<?php // Herança ->

    class Documento {
        private $numero;

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }
    };

    class CPF extends Documento {

        public function validar()
        {
            $cpf = $this->getNumero();
            return $cpf;
        }

    }
    

    $doc = new CPF();
    $doc->setNumero('06775682158');
    $doc->validar();