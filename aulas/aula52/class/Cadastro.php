<?php

    class Cadastro {

        private $nome;
        private $email;
        private $cliente;

        // Getters propertys
        public function getNome(){
            return $this->nome;
        } 
        public function getEmail(){
            return $this->email;
        } 
        public function getSenha(){
            return $this->senha;
        }
        
        // Setters property
        public function setNome($nome){
            $this->nome = $nome;
        } 
        public function setEmail($email){
            $this->email = $email;
        } 
        public function setSenha($senha){
            $this->senha = $senha;
        } 
        
    }