<?php
    class User{
        public function main(){
            echo "Please, choose more request!";
        }

        public function profile($id = NULL){
            if($id != NULL){
                echo "Hello user $id!";
            }else{
                echo "We cannot find your request, please try again!";
            }
        }
    }
?>