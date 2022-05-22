<?php
    class Account extends Controller{
        private $accountModel;

        public function __construct(){
            $this->accountModel = $this->model("AccountModel");
        }

        // call the registration view 
        public function Register(){
            $GlobalArrayMessage = [];
            // check if received any messages
            if(isset($_GET)){
                $messages = isset($_GET['message']) ? $_GET['message'] : "";
                if(!empty($messages)){
                    $mesageArray = explode("::", $messages);
                    $messageCode = $mesageArray[0];
                    $messageText = $mesageArray[1];

                    // set the global message array
                    array_push($GlobalArrayMessage, $messageCode);
                    array_push($GlobalArrayMessage, $messageText);
                }
            }
            $this->view('accounts/register', $GlobalArrayMessage);
        }

        // call the login view
        public function login(){
            $GlobalLoginMessageArray = [];
            // check if received any messages
            if(isset($_GET)){
                $messages = isset($_GET['message']) ? $_GET['message'] : "";
                if(!empty($messages)){
                    $mesageArray = explode("::", $messages);
                    $messageCode = $mesageArray[0];
                    $messageText = $mesageArray[1];

                    // set the global message array
                    array_push($GlobalLoginMessageArray, $messageCode);
                    array_push($GlobalLoginMessageArray, $messageText);
                }
            }

            $this->view('accounts/login', $GlobalLoginMessageArray);
        }

        // call function to do register data
        public function register_user(){
            $message = "";
            // check the request type 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // init the params
                $user_name = $_POST['user_fullname'];
                $user_type = $_POST['user_type'];
                $user_email = $_POST['email_address'];
                $user_password = $_POST['password'];
                $user_address = $_POST['address'];

                // check if the user exists in the database 
                $user_obj = $this->accountModel->GetUserByEmailPass($user_email, $user_password);
                if($user_obj){
                    // user exists
                    $message = "2::User Already Exists";
                }else{
                    // add the user to db
                    $is_user_inserted = $this->accountModel->InsertUserCredentials($user_name, $user_type, $user_email, $user_password, $user_address);
                    if($is_user_inserted == true){
                        $message = "0::User Added Successfully";
                    }else{
                        $message = "3::User not inserted due to some technical error";
                    }
                }
            }else{
                $message = "1::Request Method is not suppored";
            }

            header("Location:" . URLROOT . '/account/register?message=' . $message);
        }

        // call function to login the user
        public function login_user(){
            $message = "";

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $user_email = $_POST['email'];
                $user_password = $_POST['password'];

                // get the user object 
                $user_obj = $this->accountModel->GetUserByEmailPass($user_email, $user_password);
                // apply login login
                if($user_obj){
                    // user exists
                    // add the user to the session
                    $session_helper = new SessionHelper();
                    $session_helper->make_session_variable('user_object', $user_obj);
                    // init the message
                    $message = "0::Login Successful";
                }else{
                    $message = "1::Invalid Credentials Entered";
                }
            }else{
                $message = "2::Invalid Method Type Provided";
            }

            header("Location:" . URLROOT . '/account/login?message=' . $message);
        }

        // call the logout function 
        public function logout(){
            // destroy all the sessions
            $session_helper = new SessionHelper();
            $session_helper->remove_all_session_variables();
            $session_helper->destroy_session();
            // redirect to the home page 
            header("Location:" . URLROOT);
        }
    }
?>