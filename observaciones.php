<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once 'controllers/ObservacionController.php';

$controller = new ObservacionController();

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
        $observacion = null;
        include 'views/observaciones/formulario.php';
        break;
    default:
        echo "Acción no válida.";
}
