<?php

    namespace Cliente;

    class Cadastro extends \Cadastro{
        public function registrarVenda(){
            echo "Foi registrado para o cliente" . self::getNome();
        }
    }