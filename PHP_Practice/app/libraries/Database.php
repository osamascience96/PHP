<?php
    class Database{
        
        private $statement;
        private $dbHandler;
        private $error;

        public function __construct(){
            $this->dbHandler = Connection::GetConnectionInstance()->GetConnection();
        }

        // Allows us to write queries
        public function query($sql){
            $this->statement = $this->dbHandler->prepare($sql);
        }

        // bind values
        public function bind($parameter, $value, $type = null){
            switch(is_null($type)){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }

            $this->statement->bindValue($parameter, $value, $type);
        }
        
        // execute the prepared statement
        public function execute(){
            return $this->statement->execute();
        }

        // return an array 
        public function resultSet(){
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        } 

        // return a specific row as an object 
        public function single(){
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        // Get's the row count 
        public function rowCount(){
            return $this->statement->rowCount();
        }
    }
?>