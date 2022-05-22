<?php
    class Home extends Controller{
        private $homeModel;

        public function __construct(){
            // call the object of the home Model 
            $this->homeModel = $this->model('HomeModel');
        }

        public function index(){
            // Get all the cars on sale
            $cars_object_list = $this->homeModel->GetAllCarsOnSale();
            $this->view('home/index', $cars_object_list);
        }
    }
?>