<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once 'controllers/ComisionController.php';

$controller = new ComisionController();

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
        $comision = null;
        include 'views/comisiones/formulario.php';
        break;
    default:
        echo "Acción no válida.";
}
