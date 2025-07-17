<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once 'controllers/ExamenController.php';

$controller = new ExamenController();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'index':
        $controller->index();
        break;
    case 'guardar':
        $controller->guardar($_POST);
        break;
    case 'editar':
        $controller->editar($_GET['id']);
        break;
    case 'eliminar':
        $controller->eliminar($_GET['id']);
        break;
    case 'nuevo':
        $examen = null;
        include 'views/examenes/formulario.php';
        break;
    default:
        echo "Acción no válida.";
}
