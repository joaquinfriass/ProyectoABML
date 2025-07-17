<?php
require_once 'db/Conexion.php';

class Observacion {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexion())->getConexion();
    }

    public function listar() {
        $sql = "SELECT * FROM observaciones";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtener($id) {
        $sql = "SELECT * FROM observaciones WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($estudiante, $seguimiento) {
        $sql = "INSERT INTO observaciones (estudiante, seguimiento) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$estudiante, $seguimiento]);
    }

    public function actualizar($id, $estudiante, $seguimiento) {
        $sql = "UPDATE observaciones SET estudiante = ?, seguimiento = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$estudiante, $seguimiento, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM observaciones WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
