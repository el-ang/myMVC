<?php
    class User extends Controller{
        public function main(){
            $data["title"] = __CLASS__;
            $this->view(strtolower($data["title"]) . "/index", $data);
        }

        public function profile($id = NULL){
            $data = array(
                "id"    => $id,
                "title" => ucfirst(str_replace(__CLASS__ . "::", "", __METHOD__))
            );
            $this->view(strtolower(__CLASS__) . "/profile", $data);
        }
    }
?>