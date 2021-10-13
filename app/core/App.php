<?php
    class App{
        protected $controller = "";
        protected $method = "";
        protected $params = [];

        public function __construct(){
            $url = $this->parseURL();

            // Controller

        }

        public function parseURL(){
            if($_GET["url"]){
                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }
    }
?>