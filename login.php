<?php
require_once 'controllers/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $controller = new UsuarioController();
    $controller->login($email, $password);
} else {
    include 'views/login/login.php'; // Muestra el formulario si no se envió POST
}

