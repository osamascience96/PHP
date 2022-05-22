<?php
    class Product extends Controller{
        private $productModel;

        public function __construct(){
            // call the object of the home model
            $this->productModel = $this->model('ProductModel'); 
        }

        public function index(){
            $response = $this->productModel->GetAllProducts();
            $this->view("products/index", $response);
        }

        public function addcart(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $userid = $_POST['userid'];
                $productid = $_POST['productid'];
                $this->productModel->InsertCart($userid, $productid);

                echo json_encode($this->productModel->GetUserCart($userid));
            }else{
                echo 'invalid method';
            }
        }

        public function GetAllUserCart(){
            $session_helper = new SessionHelper();
            $is_session = $session_helper->get_session_value('login_session');
            if($is_session == true){
                $userid = $session_helper->get_session_value('id');

                echo json_encode($this->productModel->GetUserCart($userid));
            }else{
                echo 'User not logged in';
            }
        }

        public function GetAllCartOrders(){
            $session_helper = new SessionHelper();
            $is_session = $session_helper->get_session_value('login_session');
            if($is_session == true){
                $userid = $session_helper->get_session_value('id');

                $response = $this->productModel->GetAllCartOrders($userid);

                $this->view("products/checkout", $response);
            }else{
                echo 'User not logged';
            }
        }

        public function Checkout(){
            $session_helper = new SessionHelper();
            $is_session = $session_helper->get_session_value('login_session');

            if($is_session == true){
                $userid = $session_helper->get_session_value('id');

                $this->productModel->CheckoutUserOrders($userid);

                echo json_encode("updated_successfully");
            }else{
                echo 'User not logged';
            }
        }
    }
?>