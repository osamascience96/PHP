<?php
    class Company extends Controller{
        private $companyModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->companyModel = $this->model("CompanyModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(1, 2, 3, 13), $userroles)) > 0){
                $this->companyModel->userId = $userContext->id;
                $companyList = $this->companyModel->SelectAllByUserId();

                $data = ['companylist' => $companyList];
                $this->view("Dashboard/Company/index", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Add(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(2, 3), $userroles)) > 0){
                $data = [];

                if(isset($_GET['id'])){
                    $id = $_GET['id'];

                    $this->companyModel->id = $id;
                    $company = $this->companyModel->SelectById();

                    $data = ['company' => $company];
                }

                $this->view("Dashboard/Company/add", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Save(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(2, 3), $userroles)) > 0){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                    $userContext = $this->sessionHelper->get_session_value('user');

                    $userid = $userContext->id;
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $companyassignedid = $_POST['company_id'];

                    $message = "";

                    $this->companyModel->userId = $userid;
                    $this->companyModel->name = $name;
                    $this->companyModel->address = $address;
                    $this->companyModel->companyassignedid = $companyassignedid;

                    if(!isset($_POST['id'])){

                        $company = $this->companyModel->SelectByCompanyAssignedId();

                        if(!$company){
                            // add new company
                            $this->companyModel->new();

                            header("Location: " . URLROOT . "/Company");
                        }else{
                            $message = "Company already Created";
                            header("Location: " . URLROOT . "/Company/Add" . "?error=" . $message);
                        }
                    }else{
                        $id = $_POST['id'];
                        $this->companyModel->id = $id;

                        // update new company
                        $this->companyModel->update();

                        header("Location: " . URLROOT . "/Company");
                    }
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function del(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(13), $userroles)) > 0){
                $message = "";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->companyModel->id = $id;

                    try {
                        
                        // delete company
                        $this->companyModel->DeleteCompanyById();
                        header("Location: " . URLROOT . "/Company");

                    } catch (Exception $e) {
                        $message = "Cannot delete the company due to linked offices, employees or shipments. Please Check any before delete the company.";
                        header("Location: " . URLROOT . "/Company" . "?error=" . $message);
                    }
                }else{
                    $message = "Please Provide id to delete the company";
                    header("Location: " . URLROOT . "/Company" . "?error=" . $message);
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        // Endpoints
        public function GetAllUserEmployees(){
            $userContext = $this->sessionHelper->get_session_value('user');

            $this->companyModel->userId = $userContext->id;
            $companies = $this->companyModel->SelectAllByUserId();

            echo json_encode($companies);
        }
    }
?>