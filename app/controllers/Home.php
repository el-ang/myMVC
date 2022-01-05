<?php
    class Home extends Controller{
        public function main(){
            $data["title"] = __CLASS__;
            $this->view(strtolower($data["title"]) . "/index", $data);
        }
    }
?>