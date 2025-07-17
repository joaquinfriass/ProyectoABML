<?php
require_once 'models/Usuario.php';

class UsuarioController{
    private $modelo;

    public function __construct(){
        $this->modelo = new Usuario();
    }

public function login($email, $password) {
    $user = $this->modelo->obtenerPorEmail($email);

    if ($user && $password === $user['password']) {
        session_start();
        $_SESSION['usuario'] = $user['nombre'];
        $_SESSION['email'] = $user['email'];
        header('Location: index.php');
        exit();
    } else {
        $error = "Email o contraseña incorrectos.";
        include 'views/login/login.php';
    }
}

    public function logout(){
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
}