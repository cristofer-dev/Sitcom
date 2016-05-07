<?php 

class ContratoModel {
    
    function __construct(){
        $this->contrato_id = 0;
        $this->denominacion = '';
        $this->fecha = '';
    }

    function insert(){
        $sql = "INSERT INTO contrato (denominacion, fecha)
                VALUES (?,?)";
        $datos = array($this->denominacion, $this->fecha);
        $this->contrato_id = db($sql,$datos);
    }
}


class ContratoView {
    
    function agregar(){
        
        $html = file_get_contents("static/html/contrato_agregar.html");
        $html_base = file_get_contents("static/html/base.html");
        $render = str_replace(
            "{CONTENIDO}", 
            $html, 
            $html_base);
        print $render;
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

    function guardar(){        
        extract($_POST);

        $this->model->denominacion = $denominacion;
        $this->model->fecha = $fecha;
        $this->model->insert();
    }

    function listar(){
        echo "listar";
    }
}


?>