<?php
require_once 'db/Conexion.php';

class Examen {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexion())->getConexion();
    }

    public function listar() {
        $sql = "SELECT * FROM examenes";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtener($id) {
        $sql = "SELECT * FROM examenes WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($materia, $fecha) {
        $sql = "INSERT INTO examenes (materia, fecha_examen) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$materia, $fecha]);
    }

    public function actualizar($id, $materia, $fecha) {
        $sql = "UPDATE examenes SET materia = ?, fecha_examen = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$materia, $fecha, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM examenes WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
