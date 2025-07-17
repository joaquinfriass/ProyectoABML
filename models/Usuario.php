<?php
require_once 'db/Conexion.php';

class Usuario{
    private $conn;

    public function __construct(){
        $this->conn = (new Conexion())->getConexion();
    }

    //Buscar por Email
    public function obtenerPorEmail($email){
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Crear nuevo usuario
    public function registrar($nombre, $email, $passwordPlano){
        $hash = password_hash($passwordPlano, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre,$email,$hash]);
    }
}