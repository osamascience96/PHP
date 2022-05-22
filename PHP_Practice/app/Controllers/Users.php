<?php
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function GetAllUsers(){
            // getting the response of all the users in the database
            $responseArray = $this->userModel->getUsers();
            // return the response array 
            return $responseArray;
        }

        public function register(){
            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirm_passwordError' => ''
            ];

            // check for the submition of the registration 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirm_password']),
                    'usernameError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirm_passwordError' => ''      
                ];

                $nameValidation = "/^[A-Za-z0-9]+$/";
                
                //password must contain one numeric value, make it test out 
                // $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

                // validate username on numbers and chars
                if(empty($data['username'])){
                    $data['usernameError'] = 'Please Enter UserName.';
                }else if(!preg_match($nameValidation, $data['username'])){
                    $data['usernameError'] = 'Name can only contain letters and numbers';
                }

                // validate email
                if(empty($data['email'])){
                    $data['emailError'] = 'Please Enter Email Address.';
                }else if(!filter_var($data['email']. FILTER_VALIDATE_EMAIL)){
                    $data['emailError'] = 'Please enter the correct format.';
                }else{
                    // check if the email exists in our database
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['emailError'] = 'Email Address Already exists'; 
                    }
                }

                // validate password on length and numberic values
                if (empty($data['password'])){
                    $data['passwordError'] = 'Please Enter password.';
                }else if(strlen($data['password']) < 6){
                    $data['passwordError'] = 'Password must be aleast 8 characters.';
                }
                // else if(!preg_match($passwordValidation, $data['password'])){
                //     $data['passwordError'] = 'Password must have at least one numeric value.';
                // }

                // validate the confirm password
                if (empty($data['confirmPassword'])){
                    $data['confirm_passwordError'] = 'Please Confirm your Password.';
                }else{
                    // if the confirm password does not match the password field
                    if($data['confirmPassword'] != $data['password']){
                        $data['confirm_passwordError'] = 'Passwords do not match, please try again!';
                    }
                }

                // Make sure that the errors are empty
                if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirm_passwordError'])){
                    // Hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // register the user from the model function 
                    if($this->userModel->register($data)){
                        // redirect the user to the login page 
                        header('location:' . URLROOT . '/users/login'); 
                    }else{
                        die("Something went wrong.");
                    }
                }

            }

            $this->view('users/register', $data);
        }

        public function login(){
            $data = [
                'title' => 'Login Page',
                'username' => isset($_POST['username']) ? trim($_POST['username']) : '',
                'password' => isset($_POST['password']) ? trim($_POST['password']) : '',
                'usernameError' => '',
                'passwordError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // validate the username and password the empty ones
                if(empty($data['username'])){
                    $data['usernameError'] = 'Please enter your username';
                }

                if(empty($data['password'])){
                    $data['passwordError'] = 'Please enter your password';
                }

                // check if the both the username and password error are empty, 
                if (empty($data['usernameError']) && empty($data['passwordError'])){
                    $userExistsResponse = $this->userModel->validateUserExists($data['username']);

                    if($userExistsResponse == true){
                        // validate the password
                        $loggedInResponse = $this->userModel->login($data['username'], $data['password']);
                        if($loggedInResponse){
                            // start the session 
                            $this->createUserSession($loggedInResponse);
                        }else{
                            $data['passwordError'] = 'Username or Password is incorrect';
                            $this->view('users/login', $data);
                        }
                    }else{
                        $data['passwordError'] = 'Username does not exists in our database';
                    }
                }

            }else{
                $this->view('users/login', $data);
            }
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            header('location:' . URLROOT . '/pages/index');
        }

        private function createUserSession($loggedIn){
            if($loggedIn){
                $_SESSION['user_id'] = $loggedIn->user_id;
                $_SESSION['username'] = $loggedIn->user_name;
                header('location:' . URLROOT . '/pages/index');
            }
        }
    }
?>