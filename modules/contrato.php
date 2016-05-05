<?php 

class ContratoModel {
    
    function __construct(){
        $this->contrato_id = 0;
        $this->denominacion = '';
        $this->fecha = '';
    }
}


class ContratoView {
    
    function agregar(){
        print_r("Form Agregar");
    }
}


class ContratoController {
    
    function __construct(){
        $this->model = new ContratoModel();
        $this->view =  new ContratoView();
    }

    function agregar(){
        $this->view->agregar();

    }
}


?>