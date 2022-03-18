<?php

    class Database extends PDO {
        private $connection;

        public function __construct($db_name, $db_user, $db_password){
            $this->connection = new PDO("mysql:host=localhost;dbname=$db_name", $db_user, $db_password);
        }

        private function setParams($statement, $parameters = array()){
            foreach($parameters as $key => $value){
                $this->setParam($statement, $key, $value);
            }
        }

        private function setParam($satatement, $key, $value)
        {
            $satatement->bindParam($key, $value);
        }

        public function setQuery($query, $params = array())
        {
            $stmt = $this->connection->prepare($query);
            $this->setParams($stmt, $params); // bind
            $stmt->execute();
            return $stmt;
        }

        public function select($query,$params = array()):array{
            $stmt = $this->setQuery($query, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }