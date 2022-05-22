<?php
    class Home extends Controller{
        private $homeModel;

        public function __construct(){
            // call the object of the home model
            $this->homeModel = $this->model('HomeModel'); 
        }

        public function index(){
            $this->view('home/index');
        }

        public function registeration(){
            $this->view('home/register');
        }

        // check the usercredentials 
        public function login_check(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $login_credential = $_POST['username_email'];
                $password = $_POST['password'];
                $response = $this->homeModel->login_user($login_credential, $password);

                if(!empty($response)){
                    // setting the session 
                    $session_helper_obj = new SessionHelper();
                    $session_helper_obj->make_session_variable('login_session', true);
                    $session_helper_obj->make_session_variable('id', $response->id);
                    $session_helper_obj->make_session_variable('name', $response->name);
                    $session_helper_obj->make_session_variable('username', $response->username);
                    $session_helper_obj->make_session_variable('email', $response->email);
                    $session_helper_obj->make_session_variable('password', $response->password);
                    $session_helper_obj->make_session_variable('date', $response->created_at);

                    echo json_encode("login_success");
                }else{
                    echo json_encode("login_failed");
                }
            }else{
                echo 'Invalid Method';
            }
        }

        public function order(){
            $session_helper = new SessionHelper();
            $is_session = $session_helper->get_session_value('login_session');
            if($is_session == true){
                $userid = $session_helper->get_session_value('id');
            }
        }

        public function register(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $response = $this->homeModel->register_user($name, $username, $email, $password);
                echo json_encode($response);
            }else{
                echo "Invalid Method";
            }
        }

        public function logout(){
            $session_helper_obj = new SessionHelper();
            $session_helper_obj->remove_all_session_variables();
            $session_helper_obj->destroy_session();

            header('Location: ' . URLROOT);
        }
        
    }
?>