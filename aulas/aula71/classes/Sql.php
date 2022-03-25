<?php

    class Sql extends PDO {

        private $connection;

        public function __construct($dbname, $user, $password){
            $this->connection = new PDO("mysql:host=localhost;dbname=$dbname",$user,$password);
            echo "Connection (Construtor): <br>";
            var_dump($this->connection);
        }

        private function setParams($statment, $parameters = array()){
            foreach($parameters as $key => $param){
                $this->setParam($statment, $key, $param);
            }
        }

        private function setParam($statment, $key, $value){
            $statment->bindParam($key, $value);
        }

        // refactory Query for setQuery (Query is a method in the PHP8)
        public function setQuery($rawQuery, $params = array()){
            $stmt = $this->connection->prepare($rawQuery);

            $this->setParams($stmt, $params);
            $stmt->execute();
            return $stmt;
        }

        public function select($rawQuery, $params = array()):array{
            $stmt = $this->setQuery($rawQuery, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

    