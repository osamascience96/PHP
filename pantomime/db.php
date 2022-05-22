<?php require_once 'connection_state.php'?>

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

        // Get the row count
        public function rowCount(){
            return $this->statement->rowCount();
        }

        // get the last inserted row
        public function GetLastInsertedRowId(){
            return $this->dbHandler->lastInsertId();
        }

        // close the connection
        public function close(){
            $this->dbHandler->close();
        }
    }
?>