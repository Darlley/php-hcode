<?php

    require_once('Sql.php');

    class Usuario {

        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;


        public $sql_connection;

        // public function __construct($dbdatabase, $dbuser, $dbpassword){
        //     $this->sql_connection = new SQL($dbdatabase, $dbuser, $dbpassword);
        // }

        /**
         * Get the value of idusuario
         */ 
        public function getIdusuario()
        {
            return $this->idusuario;
        }

        /**
         * Set the value of idusuario
         *
         * @return  self
         */ 
        public function setIdusuario($idusuario)
        {
            $this->idusuario = $idusuario;

            return $this;
        }

        /**
         * Get the value of deslogin
         */ 
        public function getDeslogin()
        {
            return $this->deslogin;
        }

        /**
         * Set the value of deslogin
         *
         * @return  self
         */ 
        public function setDeslogin($deslogin)
        {
            $this->deslogin = $deslogin;

            return $this;
        }

        /**
         * Get the value of dessenha
         */ 
        public function getDessenha()
        {
            return $this->dessenha;
        }

        /**
         * Set the value of dessenha
         *
         * @return  self
         */ 
        public function setDessenha($dessenha)
        {
            $this->dessenha = $dessenha;

            return $this;
        }

        /**
         * Get the value of dtcadastro
         */ 
        public function getDtcadastro()
        {
            return $this->dtcadastro;
        }

        /**
         * Set the value of dtcadastro
         *
         * @return  self
         */ 
        public function setDtcadastro($dtcadastro)
        {
            $this->dtcadastro = $dtcadastro;

            return $this;
        }


        // METODOS
        public function loadById($id){
            $this->sql_connection = new SQL('dev_php7','root','123@ldz');
            $result = $this->sql_connection->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
                ":ID" => $id
            ));

            if(count($result) > 0){
                $row = $result[0];
                $this->setIdusuario($row['id_usuario']);
                $this->setDeslogin($row['des_login']);
                $this->setDessenha($row['des_senha']);
                $this->setDtcadastro($row['dt_cadastro']);
            }
        }

        public function __toString(){
            return json_encode(array(
                "id_usuario" => $this->getIdusuario(),
                "des_login" => $this->getDeslogin(),
                "des_senha" => $this->getDessenha(),
                "dt_cadastro" => $this->getDtcadastro(),
            ));
        }

    }