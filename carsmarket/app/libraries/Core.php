<?php
    // core app class
    class Core{
        private $currentController = 'Home';
        private $currentMethod = 'index';
        private $params = [];

        public function __construct(){
            $url = $this->getURL();
            // check if the url array is not empty
            if(!empty($url)){
                // fill in the params
                // 1) Check for the controller to exist
                if(file_exists(APPROOT . '/controllers/' . ucwords($url[0]) . '.php')){
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }

                // check if 2nd param is set for the class
                if(isset($url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }


                // Get Parameters
                $this->params = $url ? array_values($url) : [];
            }
            // require the controller
            require_once APPROOT . '/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController();
            // check if the method not exists in the class
            if(!method_exists($this->currentController, $this->currentMethod)){
                $this->currentMethod = 'index';
            }
            // callback to the controller with the method with array of the params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getURL(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                // explode the url
                $url = explode('/', $url);
                return $url;
            }
        }
    }
?>