<?php
    /*
     * App Core Class
     * Creats URL & loads core controller
     * URL FORMAT - /controller/method/params
     */
    class Core {
        // protected to access the properties who inherits it?
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            // Look in controllers for first value
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                // If exists, set as controllers
                $this->currentController = ucwords($url[0]);
                // Unset 0 index
                // why unset local variable
                unset($url[0]);
            }

            // Require the controller
            require_once '../app/controllers/'.$this->currentController.'.php';
    
            // Instantiate controller class
            // $pages = new Pages
            $this->currentController = new $this->currentController;
            
            // Check for second part of url
            if(isset($url[1])){
                // Check to see if method exists in controller
                // Checks if the class method exists
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    // Unset 1 index
                    // why unset local variable
                    unset($url[1]);
                }
            }
    
            // Get params
            // Return all the values of an array
            $this->params = $url ? array_values($url) : [];
    
            // Call a callback with array of params
            // why call_user_func_array
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
        
        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                // why use sanitize url?
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
