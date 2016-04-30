<?php 

class ContratoModel {
    
    function __construct(){
        
    }
}


class ContratoView {
    
    function __construct(){
        
    }
}


class ContratoController {
    
    function __construct(){
        $this->model = new ContratoModel();
        $this->view =  new ContratoView();
    }

    function agregar(){
        print_r("Agregando");

    }
}


?>