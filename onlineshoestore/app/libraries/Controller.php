<?php
    // Load the model and view
    class Controller{
        public function model($model){
            // path problem here for the API
            require_once APPROOT . '/Models/' . $model . '.php';
            // instanciate model
            return new $model();
        }

        // Loads the view
        public function view($view, $data = []){
            $viewPath = APPROOT . '/views/' . $view . '.php';
            if(file_exists($viewPath)){
                require_once $viewPath;
            }else{
                // TODO: must include the page
                die("View does not exists.");
            }
        }
    }
?>