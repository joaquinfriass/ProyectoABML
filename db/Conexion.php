<?php
class Conexion{
    private $host = "localhost";
    private $dbname = "escuela";
    private $usuario = "root";
    private $clave = "";
    private $conexion;

    public function __construct(){

        try{
            $this->conexion = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
                $this->usuario,
                $this->clave
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion(){
        return $this->conexion;
    }
}