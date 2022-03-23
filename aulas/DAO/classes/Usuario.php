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
        public static function getUsersList(){
            $sql = new Sql('dev_php7','root','123@ldz');
            return $sql->select("SELECT * FROM tb_usuarios");
        }

        public static function serachUser($id_user){
            $sql = new Sql('dev_php7','root','123@ldz');
            return $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = $id_user");
        }

        public function login($login, $password){
            $sql = new Sql('dev_php7','root','123@ldz');
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND des_senha = :PASSWORD", array(
                ":LOGIN"=> $login,
                ":PASSWORD" => $password
            ));

            if(count($results) > 0){
                $this->setData($results[0]);
            }else{
                throw new Exception("Login e/ou senha inválidos!");
            }

            return $results;
        }

        public function insert($login){
            $sql = new SQL('dev_php7','root','123@ldz');
            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
                ":LOGIN" => $this->getDeslogin(),
                ":PASSWORD" => $this->getDessenha()
            ));

            if(count($results) > 0){
                $this->setData($results[0]);
            }
        }

        public function update($login, $password)
        {
            $this->setDeslogin($login);
            $this->setDessenha($password);

            $sql = new SQL('dev_php7','root','123@ldz');

            $sql->query("UPDATE tb_usuario SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID", array(
                ':LOGIN' => $this->getDeslogin(),
                ':PASSWORD' => $this->getDessenha(),
                ':ID' => $this->getIdusuario()
            ));
        }

        public function delete($id)
        {
            $this->setIdusuario($id);

            $sql = new SQL('dev_php7','root','123@ldz');
            $sql->query("DELETE FROM tb_usuarios WHERE id_usuario = :ID", array(
                ':ID' => $this->getIdusuario()
            ));

            $this->setIdusuario(0);
            $this->setDeslogin("");
            $this->setDessenha("");
            $this->setDtcadastro(new DateTime());

        }

        public function setData($data){
            $this->setIdusuario($data['id_usuario']);
            $this->setDeslogin($data['des_login']);
            $this->setDessenha($data['des_senha']);
            $this->setDtcadastro($data['dt_cadastro']);
        }

        public function loadById($id){
            $this->sql_connection = new SQL('dev_php7','root','123@ldz');
            $results = $this->sql_connection->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
                ":ID" => $id
            ));

            if(count($results) > 0){
                $this->setData($results[0]);
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