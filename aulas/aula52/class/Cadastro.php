<?php

    class Cadastro {
        private $nome;
        private $email;
        private $senha;
        
        /**
         * Get the value of nome
         */ 
        public function getNome():string
        {
            return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail():string
        {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha():string
        {
            return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
            $this->senha = $senha;

            return $this;
        }


        public function __toString(){
            return json_encode(array(
                "nome"=>$this->getNome(),
                "email"=>$this->getEmail(),
                "senha"=>$this->getSenha()
            ));
        }
    }