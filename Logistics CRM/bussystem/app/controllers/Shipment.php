<?php
    class Shipment extends Controller{
        private $shipmentModel;
        private $companyModel;
        private $clientModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->shipmentModel = $this->model("ShipmentModel");
            $this->companyModel = $this->model("CompanyModel");
            $this->clientModel = $this->model("ClientModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(10, 11, 12, 16), $userroles)) > 0){
                $shipments = array();

                $userContext = $this->sessionHelper->get_session_value("user");

                $this->clientModel->headerUserId = $userContext->id;
                $clients = $this->clientModel->SelectAllByHeadUserId();

                foreach($clients as $client){
                    $this->shipmentModel->clientId = $client->id;
                    $list = $this->shipmentModel->SelectAllByClientId();

                    foreach($list as $item){
                        array_push($shipments, $item);
                    }
                }

                $data = ['shipments' => $shipments];
                $this->view("Dashboard/Shipment/index", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Add(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(11, 12), $userroles)) > 0){

                $this->companyModel->userId = $userContext->id;
                $companies = $this->companyModel->SelectAllByUserId();

                $this->clientModel->headerUserId = $userContext->id;
                $clients = $this->clientModel->SelectAllByHeadUserId();

                $shipment = null;

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->shipmentModel->id = $id;

                    $shipment = $this->shipmentModel->SelectById();
                }

                $data = ['companyList' => $companies, "clientList" => $clients, "shipment" => $shipment];
                $this->view("Dashboard/Shipment/Add", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Save(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(11, 12), $userroles)) > 0){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                    $companyslct = $_POST['companyslct'];
                    $branchslct = $_POST['branchslct'];
                    $clientslct = $_POST['clientslct'];
                    $from_address = $_POST['from_address'];
                    $to_address = $_POST['to_address'];
                    $pick_up_date = $_POST['pick_up_date'];
                    $delieverDate = $_POST['deliver_date'];
                    $expectedDelieveryDate = $_POST['expected_deliever_date'];
    
                    // set values to shipment model
                    $this->shipmentModel->companyId = $companyslct;
                    $this->shipmentModel->branchId = $branchslct;
                    $this->shipmentModel->clientId = $clientslct;
                    $this->shipmentModel->fromAddress = $from_address;
                    $this->shipmentModel->toAddress = $to_address;
                    $this->shipmentModel->pickUpDate = $pick_up_date;
                    $this->shipmentModel->expectedDelieverDate = $expectedDelieveryDate;
                    $this->shipmentModel->delieverDate = $delieverDate;
    
                    if(isset($_POST['id'])){
                        $id = $_POST['id'];
                        $this->shipmentModel->id = $id;
    
                        // update shipment
                        $this->shipmentModel->update();
                    }else{
                        // create new shipment
                        $this->shipmentModel->new();
                    }
    
                    header("Location: " . URLROOT . '/Shipment');
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function del(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(16), $userroles)) > 0){
                $message = "";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->shipmentModel->id = $id;

                    try {
                        
                        // delete shipment
                        $this->shipmentModel->DeleteById();
                        header("Location: " . URLROOT . "/Shipment");

                    } catch (Exception $e) {
                        $message = "Cannot delete the shipment due to linked data in the website. Please Check any before delete the shipment.";
                        header("Location: " . URLROOT . "/Shipment" . "?error=" . $message);
                    }
                }else{
                    $message = "Please Provide id to delete the Shipment";
                    header("Location: " . URLROOT . "/Shipment" . "?error=" . $message);
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }
    }
?>