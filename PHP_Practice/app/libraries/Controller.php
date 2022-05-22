<?php
    // Load the model and view
    class Controller{
        public function model($model){
            // path problem here for the api
            require_once dirname(__DIR__) . '/Models/' . $model . '.php';
            // instanciate model
            return new $model();
        }

        // Loads the view 
        public function view($view, $data = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            }else{
                die("View does not exists.");
            }
        }
    }
?>