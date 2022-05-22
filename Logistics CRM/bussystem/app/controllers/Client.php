<?php
    class Client extends Controller{
        private $homeModel;
        private $clientModel;
        private $sessionHelper;

        public function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
            $this->clientModel = $this->model("ClientModel");
            $this->sessionHelper = new SessionHelper();
        }

        public function index(){

            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userContext = $this->sessionHelper->get_session_value('user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(17, 18, 19, 20), $userroles)) > 0){
                $this->clientModel->headerUserId = $userContext->id;
                $clients = $this->clientModel->SelectAllByHeadUserId();
            
                $data = ['clientList' => $clients];
                $this->view("Dashboard/Client/index", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Add(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(18, 19), $userroles)) > 0){
                $data = [];

                if(isset($_GET['id'])){
                    $id = $_GET['id'];

                    $this->clientModel->id = $id;
                    $client = $this->clientModel->SelectById();

                    $data = ['client' => $client];
                }

                $this->view("Dashboard/Client/Add", $data);
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function Save(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(18, 19), $userroles)) > 0){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $userContext = $this->sessionHelper->get_session_value("user");
                    
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $this->homeModel->firstName = $firstname;
                    $this->homeModel->lastName = $lastname;
                    $this->homeModel->email = $email;
                    $this->homeModel->password = md5($password);
                    $this->homeModel->type = "client";

                    $userId = 0;

                    if(!isset($_POST['id'])){
                        $user = $this->homeModel->SelectByEmail();
                        if(!$user){
                            $this->homeModel->new();

                            $userId = $this->homeModel->GetNewRowCreated();

                            $head_user_id = $userContext->id;

                            $this->clientModel->userId = $userId;
                            $this->clientModel->headerUserId = $head_user_id;

                            $this->clientModel->new();
                        }else{
                            header("Location: " . URLROOT . "/Client/Add?error=Client Profile already created.");
                        }
                    }else{
                        $userId = $_POST['user_id'];

                        $this->homeModel->id = $userId;

                        //update user data
                        $this->homeModel->update();
                    }

                    header("Location: " . URLROOT . "/Client");
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }

        public function del(){
            $is_sub_user = $this->sessionHelper->get_session_value('is_sub_user');
            $userroles = $this->sessionHelper->is_session_exists('userroles') ? $this->sessionHelper->get_session_value('userroles') : array();

            if(!$is_sub_user || count(array_intersect(array(20), $userroles)) > 0){
                $message = "";

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $this->clientModel->id = $id;

                    try {
                        
                        $client = $this->clientModel->SelectById();

                        // Delete Client
                        $this->clientModel->DeleteById();

                        // Delete foriegn key user
                        $this->homeModel->id = $client->user_id;
                        $this->homeModel->DeleteById();

                        header("Location: " . URLROOT . "/Client");

                    } catch (Exception $e) {
                        $message = "Cannot delete client due to linked data in the website.";
                        header("Location: " . URLROOT . "/Client" . "?error=" . $message);
                    }
                }else{
                    $message = "Please Provide id to delete the client";
                    header("Location: " . URLROOT . "/Client" . "?error=" . $message);
                }
            }else{
                header("Location: " . URLROOT . "?error=Access Denied");
            }
        }


        // Endpoints
        public function GetAllUserClients(){
            $userContext = $this->sessionHelper->get_session_value('user');

            $this->clientModel->headerUserId = $userContext->id;
            $clients = $this->clientModel->SelectAllByHeadUserId();

            echo json_encode($clients);
        }
    }
?>