<?php
require_once 'models/Comision.php';

class ComisionController{
    private $modelo;

    public function __construct(){
        $this->modelo = new Comision();
    }

    public function index(){
        $comisiones = $this->modelo->listar();
        include 'views/comisiones/listar.php';
    }

    public function guardar($data){
        if(isset($data['id']) && $data['id'] != ""){
            $this->modelo->actualizar($data['id'], $data['nombre_comision'], $data['division']);
        } else{
            $this->modelo->crear($data['nombre_comision'], $data['division']);
        }
        header('Location: comisiones.php');
    }

    public function editar($id){
        $comision = $this->modelo->obtener($id);
        include 'views/comisiones/formulario.php';
    }

    public function eliminar($id){
        $this->modelo->eliminar($id);
        header('Location: comisiones.php');
    }
}