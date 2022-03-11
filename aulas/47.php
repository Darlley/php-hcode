<?php

    class Documento {
        private $numero;

        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
            $this->numero = $numero;
        }
    }

    class CPF extends Documento {
        public function validate(){
            echo $this->getNumero() . 'foi';
        }
    }

    $cpf = new CPF();
    $cpf->setNumero('06775682158');
    $cpf->validate();