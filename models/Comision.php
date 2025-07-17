<?php
require_once 'db/Conexion.php';

Class Comision{
    private $conn;

    public function __construct(){
        $this->conn = (new Conexion())->getConexion();
    }

    public function listar(){
        $sql = "SELECT * FROM comisiones";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtener($id){
        $sql = "SELECT * FROM comisiones WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $division){
        $sql = "INSERT INTO comisiones(nombre_comision, division) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre,$division]);
    }

    public function actualizar($id, $nombre, $division){
        $sql = "UPDATE comisiones SET nombre_comision = ? , division = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre,$division,$id]);
    }

    public function eliminar($id){
        $sql = "DELETE FROM comisiones WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}