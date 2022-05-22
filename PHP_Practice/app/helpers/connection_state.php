<?php
    // creating the singleton state in php 
    class Connection {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        private $connection;
        private static $connectObj = null;


        private function __construct(){
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );
            
            try{
                $this->connection = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public static function GetConnectionInstance(){
            if (Connection::$connectObj == null){
                Connection::$connectObj =  new Connection();
            }

            return Connection::$connectObj;
        }

        public function GetConnection(){
            return $this->connection;
        }
    }


?>