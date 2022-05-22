<?php
    class HomeModel extends Database{

        public $id;
        public $firstName;
        public $lastName;
        public $email;
        public $password;
        public $type = "admin";
        public $timestamp;

        public function SelectById(){
            $this->query("SELECT * FROM users WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->single();
        }

        public function SelectByEmail(){
            $this->query("SELECT * FROM users WHERE email = :email");

            $this->bind(":email", $this->email);
            return $this->single();
        }

        public function SelectByEmailPass(){
            $this->query("SELECT * FROM users WHERE email = :email AND password = :password");

            $this->bind(":email", $this->email);
            $this->bind(":password", $this->password);

            return $this->single();
        }

        public function new(){
            $this->query("INSERT INTO users(first_name, last_name, email, password, type) VALUES 
                (:firstname, :lastname, :email, :password, :type)");
            
            $this->bind(":firstname", $this->firstName);
            $this->bind(":lastname", $this->lastName);
            $this->bind(":email", $this->email);
            $this->bind(":password", $this->password);
            $this->bind(":type", $this->type);

            return $this->execute();
        }

        public function update(){
            $this->query("UPDATE users SET first_name = :firstname, last_name = :lastname, 
                email = :email, password = :password, type = :type WHERE id = :id");

            $this->bind(":firstname", $this->firstName);
            $this->bind(":lastname", $this->lastName);
            $this->bind(":email", $this->email);
            $this->bind(":password", $this->password);
            $this->bind(":type", $this->type);
            $this->bind(":id", $this->id);

            return $this->execute();
        }

        public function GetNewRowCreated(){
            return $this->GetLastInsertedRowId();
        }

        public function DeleteById(){
            $this->query("DELETE FROM `users` WHERE id = :id");

            $this->bind(":id", $this->id);
            return $this->execute();
        }
    }
?>