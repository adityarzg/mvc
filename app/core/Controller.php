<?php 
    class Controller{

        //Method untuk memanggil sebuah view yang ada di folder views
        public function view($view, $data = [])
        {
            require_once '../app/views/' .$view. '.php';
        }

        //Method untuk menjalankan model yang menyimpan data
        public function model($model)
        {
            require_once '../app/models/' .$model. '.php';
            return new $model;
        }
  
    }
?>