<?php
    class Employee extends Controller{
        private $employeeModel;
        private $homeModel;
        private $companyModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
            $this->employeeModel = $this->model("EmployeeModel");
            $this->companyModel = $this->model("CompanyModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(7, 8, 9, 15), $userroles)) > 0){
                $employeeList = array();

                $this->companyModel->userId = $userContext->id;
                $companies = $this->companyModel->SelectAllByUserId();

                // Procedure Running at O(n^2)
                foreach($companies as $company){
                    $this->employeeModel->companyId = $company->id;
                    
                    $list = $this->employeeModel->SelectAllByCompanyId();

                    foreach($list as $item){
                        array_push($employeeList, $item);
                    }
                }

                $data = ['employeeList' => $employeeList];

                $this->view("Dashboard/Employee/index", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Add(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(8, 9), $userroles)) > 0){
                $this->companyModel->userId = $userContext->id;
                $companiesList = $this->companyModel->SelectAllByUserId();

                $employee = null;

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->employeeModel->id = $id;

                    $employee = $this->employeeModel->SelectById();
                }

                $data = ['companiesList' => $companiesList, 'employee' => $employee];
                $this->view("Dashboard/Employee/Add", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Save(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(8, 9), $userroles)) > 0){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $this->homeModel->firstName = $firstname;
                    $this->homeModel->lastName = $lastname;
                    $this->homeModel->email = $email;
                    $this->homeModel->password = md5($password);
                    $this->homeModel->type = "employee";

                    $userId = 0;

                    if(!isset($_POST['id'])){
                        $user = $this->homeModel->SelectByEmail();
                        if(!$user){
                            $this->homeModel->new();

                            $userId = $this->homeModel->GetNewRowCreated();
                        }else{
                            header("Location: " . URLROOT . "/Employee/Add?error=Employee Profile already created.");
                        }
                    }else{
                        $id = $_POST['id'];
                        $userId = $_POST['userId'];

                        $this->employeeModel->id = $id;
                        $this->homeModel->id = $userId;

                        // update user data
                        $this->homeModel->update();
                    }

                    $companyId = $_POST['companyslct'];
                    $branchId = $_POST['branchslct'];
                    $joindate = $_POST['joingdate'];
                    $tenureend = $_POST['tenureend'];

                    $this->employeeModel->userId = $userId;
                    $this->employeeModel->companyId = $companyId;
                    $this->employeeModel->branchId = $branchId;
                    $this->employeeModel->joinDate = $joindate;
                    $this->employeeModel->tenureEnd = $tenureend;
                    
                    if(!isset($_POST['id'])){
                        $this->employeeModel->new();
                    }else{
                        $this->employeeModel->update();
                    }

                    header("Location: " . URLROOT . "/Employee");
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function del(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(15), $userroles)) > 0){
                $message = "";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->employeeModel->id = $id;

                    try {
                        
                        $employee = $this->employeeModel->SelectById();

                        // Delete Employee
                        $this->employeeModel->DeleteById();

                        // Delete foriegn key user
                        $this->homeModel->id = $employee->user_id;
                        $this->homeModel->DeleteById();

                        header("Location: " . URLROOT . "/Employee");

                    } catch (Exception $e) {
                        $message = "Cannot delete employee due to linked data in the website.";
                        header("Location: " . URLROOT . "/Employee" . "?error=" . $message);
                    }
                }else{
                    $message = "Please Provide id to delete the employee";
                    header("Location: " . URLROOT . "/Employee" . "?error=" . $message);
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        // Endpoints
        public function GetAllUserEmployees(){
            if(isset($_POST['companyId'])){
                $companyId = $_POST['companyId'];
                $this->employeeModel->companyId = $companyId;

                $companies = $this->employeeModel->SelectAllByCompanyId();

                echo json_encode($companies);
            }
        }
    }
?>