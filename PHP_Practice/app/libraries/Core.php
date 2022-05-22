<?php
    // core app class
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getURL();

            // check if the $url array is not empty
            if (!empty($url)){
                // look for the controllers in the first value, ucwords capitalize the first letter
                if(file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')){
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }
                // require the controller
                require_once '../app/Controllers/' . $this->currentController . '.php';
                $this->currentController = new $this->currentController();
                // check if the method exists in the param
                if(isset($url[1])){
                    if(method_exists($this->currentController, $url[1])){
                        $this->currentMethod = $url[1];
                        unset($url[1]);
                    }
                }
                // Get Parameters
                $this->params = $url ? array_values($url) : [];
            }else{
                // require the controller
                require_once '../app/Controllers/' . $this->currentController . '.php';
                $this->currentController = new $this->currentController();
            }
            // Call the callback with array of params
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