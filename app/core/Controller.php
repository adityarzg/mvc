<?php 
    class Controller{

        //Method untuk memanggil sebuah view yang ada di folder views
        public function view($view, $data = [])
        {
            require_once '../app/views/' .$view. '.php';
        }
  
    }
?>