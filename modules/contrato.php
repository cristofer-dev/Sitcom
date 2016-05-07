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

    function select(){
        $sql = "SELECT denominacion, fecha
                FROM contrato 
                WHERE contrato_id = ?";
        $datos = array($this->contrato_id);
        $resultados = db($sql,$datos);
        foreach ($resultados[0] as $key => $value) {
            $this->$key = $value;
        }
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

    function listar(){

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
        $this->view->listar();
    }

    function listar(){
        $contratos = new CollectorObject();
        $contratos->get('contrato');
        $this->view->listar($contratos->collection);  
    }
}


?>