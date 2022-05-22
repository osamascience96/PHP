<?php
    class User{
        private $db;
        
        public function __construct(){
            $this->db = new Database();
        }

        public function getUsers(){
            $this->db->query("SELECT * FROM `users`");
            
            $result = $this->db->resultSet();

            return $result;
        }

        // validate login
        public function login($username, $password){
            $this->db->query('SELECT * FROM users WHERE user_name = :username');

            // bind values
            $this->db->bind(':username', $username);

            $row = $this->db->single();

            $hashedPassword = $row->password;

            if(password_verify($password, $hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        // email is passed by the controller
        public function findUserByEmail($email){
            // prepared statement
            $this->db->query('SELECT * FROM users WHERE user_email = :email');

            // email param is binded with the email variable 
            $this->db->bind(':email', $email);

            // check if the email already registered 
            if($this->db->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function register($data){
            $this->db->query('INSERT into users (user_name, user_email, password) VALUES (:username, :useremail, :password)');

            // bind values 
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':useremail', $data['email']);
            $this->db->bind(':password', $data['password']);

            // execute function 
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function validateUserExists($username){
            // prepared statement
            $this->db->query('SELECT * FROM users WHERE user_name = :username');

            // bind values
            $this->db->bind(':username', $username);

            // execute function 
            $this->db->execute();

            if($this->db->rowCount() == 0){
                return false;
            }else{
                return true;
            }

            // check for the password 
            
        }
    }
?>