<?php
    class Role extends Controller{
        private $roleModel;
        private $homeModel;
        private $employeeModel;
        private $companyModel;
        private $clientModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
            $this->roleModel = $this->model("RoleModel");
            $this->employeeModel = $this->model("EmployeeModel");
            $this->clientModel = $this->model("ClientModel");
            $this->companyModel = $this->model("CompanyModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');

            if(!$is_sub_user){
                $userContext = $this->sessionHelper->get_session_value('user');

                // Get All the clients
                $this->clientModel->headerUserId = $userContext->id;
                $clients = $this->clientModel->SelectAllByHeadUserId();

                // get all the employees
                $employees = array();

                $this->companyModel->userId = $userContext->id;
                $companies = $this->companyModel->SelectAllByUserId();

                foreach($companies as $company){
                    $this->employeeModel->companyId = $company->id;
                    $list = $this->employeeModel->SelectAllByCompanyId();

                    foreach($list as $item){
                        array_push($employees, $item);
                    }
                }

                $data = ['clients' => $clients, 'employees' => $employees];
                $this->view('Dashboard/Role/index', $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Add(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');

            if(!$is_sub_user){
                $data = [];

                if(isset($_GET['userId'])){
                    $id = $_GET['userId'];

                    $this->homeModel->id = $id;
                    $user = $this->homeModel->SelectById();

                    $this->roleModel->userId = $id;
                    $roles = $this->roleModel->SelectAllDefinedRoles();
                    $userRoles = $this->roleModel->SelectByUserId();

                    $data = ['user' => $user, 'roles' => $roles, 'userRoles' => $userRoles];
                }

                $this->view("Dashboard/Role/add", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }   

        public function Save(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');

            if(!$is_sub_user){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $returnUrl = $_POST['returnUrl'];

                    if(!isset($_POST['roles'])){
                        header("Location: " . $returnUrl . "&error=Please Select Roles for the user");
                    }else{
                        $message = "";

                        $userId = $_POST['userid'];
                        $roles = $_POST['roles'];

                        $this->roleModel->userId = $userId;

                        // if any option is send to activate or deactivate
                        $userRoles = $this->roleModel->SelectByUserId();
                        foreach($userRoles as $role){
                            $this->roleModel->id = $role->id;
                            
                            if(!in_array($role->role_id, $roles)){
                                // deactive
                                $message = "Role Updated Successfully";
                                $this->roleModel->isActive = 0;
                            }else{
                                // active
                                $message = "Role Updated Successfully";
                                $this->roleModel->isActive = 1;
                            }

                            // update
                            $this->roleModel->update();
                        }

                        foreach($roles as $role){
                            $this->roleModel->roleid = $role;

                            $role = $this->roleModel->SelectByUserRoleId();
                            
                            if(!$role){
                                $message = "Role Added Successfully";
                                $this->roleModel->new();
                            }
                        }

                        header("Location: " . URLROOT . "/Role?message_success=" . $message);
                    }
                }
            }
        }
    }
?>