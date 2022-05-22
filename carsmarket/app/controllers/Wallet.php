<?php
    class Wallet extends Controller{
        private $walletModel;

        public function __construct(){
            $this->walletModel = $this->model("WalletModel");
        }

        // call the wallet view
        public function mywallet(){
            $session_helper = new SessionHelper();
            $message = [];
            if($session_helper->is_session_exists("user_object")){
                if(isset($_GET['message'])){
                    // set the message object to the main message array
                    $message['message'] = explode("::", $_GET['message']);
                }
                $cars_list = null;
                $userObj = $session_helper->get_session_value("user_object");
                // check the user type 
                if($userObj->type == "buyer"){
                    $cars_list = $this->walletModel->GetAllUsersBuyedCars($userObj->id);
                }else{
                    $cars_list = $this->walletModel->GetAllUsersSoldCars($userObj->id);
                }

                $message['carlist'] = $cars_list;

                $this->view("wallets/mywallet", $message);
            }
        }

        // call the buycar view
        public function buy($carid){
            $car_obj = $this->walletModel->GetCarwithUserData($carid);
            $this->view("wallets/buycar", $car_obj);
        }

        // buy car
        public function buycar($carid){
            $session_helper = new SessionHelper();
            // message
            $message = "";
            // check the session
            if($session_helper->is_session_exists("user_object")){
                $userObj = $session_helper->get_session_value("user_object");
                // get the user balance 
                $userbalance = $userObj->wallet_amount;
                // init the car object 
                $carsellerobj = $this->walletModel->GetCarwithUserData($carid);
                // check if the seller id is not equal to the buyer id 
                if($userObj->id != $carsellerobj->sellerid){
                    // check if the user has enough amount
                    if($userbalance >= $carsellerobj->carprice){
                        // calcualate
                        $userbalance -= $carsellerobj->carprice;
                        // update session 
                        $userObj->wallet_amount = $userbalance;
                        $session_helper->make_session_variable("user_object", $userObj);
                        // update in the database of the buyer
                        $this->walletModel->SetUserWalletAmount($userbalance, $userObj->id);
                        // update the seller amount to the database
                        $this->walletModel->updateselleramount($carsellerobj->carprice, $carsellerobj->sellerid);
                        // update the car buyer id
                        $this->walletModel->updatecarbuyer($carsellerobj->carid, $userObj->id);
                        // set the successful message 
                        $message = "0::Congratulations for your new Car.Enjoy!";
                    }else{
                        $message = "1::Sorry,You don't have enough amount to buy this car";
                    }
                }else{
                    $message = "1::Seller cannot buy his car.";
                }

                // redirect to the wallet
                header("Location:" . URLROOT . "/wallet/mywallet?message=".$message);
            }
        }

        // AddCar post function 
        public function add_car(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                // check if the session is set
                $session_helper = new SessionHelper();
                if($session_helper->is_session_exists("user_object")){
                    $userobj = $session_helper->get_session_value("user_object");

                    $carmodel = $_POST['model'];
                    $yearofmanufacture = $_POST['year_manufacture'];
                    $price = $_POST['price'];
                    $details = $_POST['details'];
                    $carimage = file_get_contents($_FILES['car_image']['tmp_name']);

                    $is_car_inserted = $this->walletModel->InsertCar($userobj->id, $carmodel, $yearofmanufacture, $price, $carimage, $details);

                    $message = "";

                    if($is_car_inserted == true){
                        $message = "0::Your Car Ad Posted Successfully!";
                    }else{
                        $message = "1::Your Car Ad could not be posted due to some technical error!";
                    }

                    header("Location:" . URLROOT . "/wallet/mywallet?message=" . $message);
                }
            }
        }
    }
?>