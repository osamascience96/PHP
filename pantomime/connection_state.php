<?php
    // creating the singleton class in php
    class Connection {
        private $dbHost = '127.0.0.1';
        private $dbUser = 'root';
        private $dbPass = '';
        private $dbName = 'pantomime';

        private $connection;
        private static $connectionObj = null;

        private function __construct(){
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_TIMEOUT => 5,
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
            if(Connection::$connectionObj == null){
                Connection::$connectionObj = new Connection();
            }
            return Connection::$connectionObj;
        }

        public function GetConnection(){
            return $this->connection;
        }
    }
?>