<?php
require_once 'config/db.php';

class ClienteModel
{
    private $conexion;

    public function __construct() {
        $this->conexion = db::conexion();
    }
    
    public function listar() {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($nombre, $email, $telefono) {
        $query = "INSERT INTO clientes(nombre, email, telefono) VALUES(:nombre, :email, :telefono)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->execute();
    }

    public function actualizar($id, $nombre, $email, $telefono) {
        $query = "UPDATE clientes SET nombre=:nombre, email=:email, telefono=:telefono WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->execute();
    }

    public function eliminar($id) {
        $query = "DELETE FROM clientes WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}