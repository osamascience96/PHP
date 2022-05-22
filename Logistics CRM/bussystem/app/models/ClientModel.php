<?php
    class ClientModel extends Database{
        public $id;
        public $userId;
        public $headerUserId;
        public $timestamp;


        public function new(){
            $this->query("INSERT INTO client(user_id, header_user_id) VALUES 
                (:userId, :headuserid)");
            
            $this->bind(":userId", $this->userId);
            $this->bind(":headuserid", $this->headerUserId);

            return $this->execute();
        }

        public function SelectById(){
            $this->query("SELECT client.*, users.first_name as FirstName, users.last_name as LastName, 
                            users.email as Email, users.password as Password FROM client LEFT JOIN users 
                            ON users.id = client.user_id WHERE client.id = :id");
            
            $this->bind(":id", $this->id);
            return $this->single();
        }

        public function SelectByUserId(){
            $this->query("SELECT client.*, users.first_name as FirstName, users.last_name as LastName, 
                            users.email as Email, users.password as Password FROM client LEFT JOIN users 
                            ON users.id = client.user_id WHERE client.user_id = :userId");
            
            $this->bind(":userId", $this->userId);
            return $this->single();
        }


        public function SelectAllByHeadUserId(){
            $this->query("SELECT client.*, users.first_name as FirstName, users.last_name as LastName, users.email as Email from client LEFT JOIN users ON client.user_id = users.id WHERE client.header_user_id = :headeruserid");

            $this->bind(":headeruserid", $this->headerUserId);
            return $this->resultSet();
        }

        public function DeleteById(){
            $this->query("DELETE FROM `client` WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>