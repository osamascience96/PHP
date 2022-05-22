<?php
    class AccountModel extends Database{

        public function GetUserByEmailPass($user_email, $user_password){
            $this->query("SELECT * FROM `users` WHERE email = :email AND password = :password");
            // bind the values
            $this->bind(":email", $user_email);
            $this->bind(":password", $user_password);
            // return the fetched object
            return $this->single();
        }

        public function InsertUserCredentials($username, $usertype, $email, $password, $address){
            $this->query("INSERT INTO `users`(name, email, password, type, address) VALUES (:fullname, :email, :password, :type, :address)");
            // bind the values
            $this->bind(":fullname", $username);
            $this->bind(":email", $email);
            $this->bind(":password", $password);
            $this->bind(":type", $usertype);
            $this->bind(":address", $address);
            // execute the query 
            if($this->execute()){
                return true;
            }

            return false;
        }
    }
?>