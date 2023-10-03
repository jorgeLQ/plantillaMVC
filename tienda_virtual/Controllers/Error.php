<?php
    class Errors extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function notFound(){
            //echo "mensaje desde el controlador";
            $this->views->getView($this,"Error");
        }
    }
    $notFound = new Errors();
    $notFound->notFound();
?> 