<?php
require_once 'models/Observacion.php';

class ObservacionController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Observacion();
    }

    public function index() {
        $observaciones = $this->modelo->listar();
        include 'views/observaciones/listar.php';
    }

    public function guardar($data) {
        if (!empty($data['id'])) {
            $this->modelo->actualizar($data['id'], $data['estudiante'], $data['seguimiento']);
        } else {
            $this->modelo->crear($data['estudiante'], $data['seguimiento']);
        }
        header('Location: observaciones.php');
    }

    public function editar($id) {
        $observacion = $this->modelo->obtener($id);
        include 'views/observaciones/formulario.php';
    }

    public function eliminar($id) {
        $this->modelo->eliminar($id);
        header('Location: observaciones.php');
    }
}
