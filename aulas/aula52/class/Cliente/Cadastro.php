<?php

    namespace Cliente;

    class Cadastro extends \Cadastro {

        public function chamar(){
            echo "Olá ". self::getNome() . "! tudo bem?";
        }

    }