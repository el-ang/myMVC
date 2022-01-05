<?php
    class App{
        protected $controller = "Home";
        protected $method = "main";
        protected $params = [];

        public function __construct(){
            $url = $this->parseURL();
            /* echo "<pre>";
            var_dump($url);
            echo "</pre>"; */
            $url = ($url != NULL? $url: [$this->controller]);
            $file = "../app/controllers/" . $url[0] . ".php";
            if(file_exists($file)){
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once $file;
            $this->controller = new $this->controller;
            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){
                    $this->method= $url[1];
                    unset($url[1]);
                }
            }
            if(!empty($url)){
                $this->params = array_values($url);
            }
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseURL(){
            if(isset($_GET["url"])){
                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = array_map("strtolower", explode("/", $url));
                $url[0] = ucfirst($url[0]);
                return $url;
            }
        }
    }
?>