<?php
    class Home extends Controller{
        private $homeModel;
        private $roleModel;
        private $companyModel;
        private $employeeModel;
        private $clientModel;
        private $sessionHelper;

        public function __construct(){
            $this->homeModel = $this->model("HomeModel");
            $this->employeeModel = $this->model("EmployeeModel");
            $this->companyModel = $this->model("CompanyModel");
            $this->clientModel = $this->model("ClientModel");
            $this->roleModel = $this->model("RoleModel");
            $this->sessionHelper = new SessionHelper();
        }

        // call home view
        public function index(){
            $view = "";
            
            $data = ['view' => 'CRM'];

            // set the login view by default
            if($this->sessionHelper->is_session_exists("user")){
                $view = "Dashboard/index";
            }else{
                $view = "Home/login";
            }

            $this->view($view, $data);
        }

        public function register(){
            $data = ['view' => 'CRM'];
            $this->view("Home/register", $data);
        }

        public function dashboard(){
            $data = ['view' => 'CRM'];
            $this->view("Dashboard/index", $data);
        }

        public function logout(){
            $this->sessionHelper->remove_all_session_variables();
            $this->sessionHelper->destroy_session();

            header("Location: " . URLROOT);
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                $password = $_POST['pass'];

                if(isset($_POST['remember_me']) && !empty($_POST['remember_me'])){
                    // set the cookie
                    if(!isset($_COOKIE["user_email_crm"]) && !isset($_COOKIE["user_password_crm"])){
                        setcookie("user_email_crm", $email, (time() + (1 * 365 * 86400)), "/");
                        setcookie("user_password_crm", $password, (time() + (1 * 365 * 86400)), "/");
                    }
                }

                $message = "";

                $this->homeModel->email = $email;
                $this->homeModel->password = md5($password);

                // Select User By Email and password
                $user = $this->homeModel->SelectByEmailPass();

                if($user){
                    if($user->type != 'admin'){
                        // set the session of the user
                        $this->sessionHelper->make_session_variable("is_sub_user", true);

                        // fetch user Roles
                        $this->roleModel->userId = $user->id;
                        
                        $userRoles = array();
                        $userActiveRoles = $this->roleModel->SelectActiveByUserId();

                        foreach($userActiveRoles as $role){
                            array_push($userRoles, $role->role_id);
                        }

                        // set the defined roles to the session 
                        $this->sessionHelper->make_session_variable('userroles', $userRoles);

                        if($user->type == 'employee'){
                            $this->employeeModel->userId = $user->id;
                            $employee = $this->employeeModel->SelectByUserId();

                            $this->companyModel->id = $employee->company_id;
                            $company = $this->companyModel->SelectById();

                            $this->homeModel->id = $company->user_id;
                            $user = $this->homeModel->SelectById();
                        }else{
                            $this->clientModel->userId = $user->id;
                            $client = $this->clientModel->SelectByUserId();

                            $this->homeModel->id = $client->header_user_id;
                            $user = $this->homeModel->SelectById();
                        }
                    }else{
                        // set the session of the user
                        $this->sessionHelper->make_session_variable("is_sub_user", false);
                    }

                    // set the session of the user
                    $this->sessionHelper->make_session_variable("user", $user);

                    header("Location: " . URLROOT . "/home/dashboard");
                }else{
                    $message = "Invalid Login Attempt.";
                    header("Location: " . URLROOT . "?error=". $message);
                }
            }
        }

        public function RegisterUser(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $firstName = $_POST['firstname'];
                $lastName = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $message = "";

                $this->homeModel->firstName = $firstName;
                $this->homeModel->lastName = $lastName;
                $this->homeModel->email = $email;
                $this->homeModel->password = md5($password);

                // Select User By Email
                $user = $this->homeModel->SelectByEmail();

                if(!$user){
                    // Add New User
                    $this->homeModel->new();

                    // Get Id of the user inserted 
                    $id = $this->homeModel->GetNewRowCreated();

                    // Get the new created User
                    $this->homeModel->id = $id;
                    $user = $this->homeModel->SelectById();

                    // set the session of the user
                    $this->sessionHelper->make_session_variable("user", $user);
                    // set the session of the user
                    $this->sessionHelper->make_session_variable("is_sub_user", false);

                    header("Location: " . URLROOT . "/home/dashboard");
                }else{
                    $message = "Profile Already Created.";
                    header("Location: " . URLROOT . "?error=". $message);
                }

            }
        }
    }
