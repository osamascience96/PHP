<?php
    class Profile extends Controller{
        private $profileModel;

        public function __construct(){
            $this->profileModel = $this->model("ProfileModel");
        }

        // call the profile view
        public function myprofile(){
            $message = [];
            $session_helper = new SessionHelper();
            // check if the session of the user is set
            if($session_helper->is_session_exists("user_object")){
                if(isset($_GET['message'])){
                    $message['message'] = explode("::", $_GET['message']);
                }
                $this->view("profile/myprofile", $message);
            }
        }

        // add money to the wallet
        public function addamount(){
            $message = "";
            // check if the session is set
            $session_helper = new SessionHelper();
            if($session_helper->is_session_exists("user_object")){
                $userobj = $session_helper->get_session_value("user_object");
                // check if the method is post
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $amount = $_POST['amount'];
                    $creditcard = $_POST['creditcard'];
                    $cvv = $_POST['cvv'];

                    $is_wallet_updated = $this->profileModel->UpdateWalletAmount($amount, $userobj->id);

                    if($is_wallet_updated == true){
                        $message = "0::Amount Added to the Wallet Successfully";
                        // update the session
                        $userobj->wallet_amount += $amount;
                        $session_helper->make_session_variable("user_object", $userobj);
                    }else{
                        $message = "1::Amount not added due to some problem";
                    }
                }

                header("Location:" . URLROOT . "/profile/myprofile?message=" . $message);
            }
        }

        public function updatetype(){
            // using the session to get the user object 
            $session_helper = new SessionHelper();
            // check if the session of the user is set 
            if($session_helper->is_session_exists("user_object")){
               $userobj = $session_helper->get_session_value("user_object");
               $mode = $userobj->type;
               if($mode == "buyer"){
                   $mode = "seller";
               }else{
                   $mode = "buyer";
               }
               $is_type_updated = $this->profileModel->UpdateUserType($mode, $userobj->id); 

               // update the session object 
               if($is_type_updated == true){
                   $userobj->type = $mode;
                   $session_helper->make_session_variable("user_object", $userobj);
               }
            }

            // redirect to the home page 
            header("Location:" . URLROOT);
        }
    }
?>