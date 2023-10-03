<?php
    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home($parems){
            //echo "mensaje desde el controlador";
            $this->views->getView($this,"home");
        }
        public function datos($params){
            echo "dato recibido: ".$params;
        }

        public function carrito($params){
            echo "dato recibido: ".$params;
        }
    }
?>