<?php
require_once 'models/Examen.php';

class ExamenController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Examen();
    }

    public function index() {
        $examenes = $this->modelo->listar();
        include 'views/examenes/listar.php';
    }

    public function guardar($data) {
        if (!empty($data['id'])) {
            $this->modelo->actualizar($data['id'], $data['materia'], $data['fecha_examen']);
        } else {
            $this->modelo->crear($data['materia'], $data['fecha_examen']);
        }
        header('Location: examenes.php');
    }

    public function editar($id) {
        $examen = $this->modelo->obtener($id);
        include 'views/examenes/formulario.php';
    }

    public function eliminar($id) {
        $this->modelo->eliminar($id);
        header('Location: examenes.php');
    }
}
