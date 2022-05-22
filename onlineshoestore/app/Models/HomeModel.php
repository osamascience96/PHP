<?php
    class HomeModel extends Database{

        public function check_user_exists($username, $email){
            $this->query("SELECT * FROM user WHERE username = :username || email = :email");
            $this->bind(":username", $username);
            $this->bind(":email", $email);
            return $this->single();
        }

        public function register_user($name, $username, $email, $password){
            $response = "";

            $response = $this->check_user_exists($username, $email);
            if(!empty($response)){
                $response = "user_exists";
            }else{
                $this->query("INSERT INTO user(name, username, email, password) VALUES(:name, :username, :email, :password)");
                $this->bind(":name", $name);
                $this->bind(":username", $username);
                $this->bind(":email", $email);
                $this->bind(":password", $password);
                $this->execute();

                $response = "inserted_user";
            }

            return $response;
        }

        public function login_user($username_email, $password){
            $this->query("SELECT * FROM user WHERE (username = :username_email OR email = :username_email) AND password = :password");
            $this->bind(":username_email", $username_email);
            $this->bind(":password", $password);
            return $this->single();
        }
    }
?>