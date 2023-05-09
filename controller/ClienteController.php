<?php
require_once 'model/ClienteModel.php';

class ClienteController {

    private $modelo;

    public function __construct() {
        $this->modelo = new ClienteModel();
    }

    public function listar() {
        $clientes = $this->modelo->listar();
        echo json_encode($clientes);
    }

    public function insertar($nombre, $email, $telefono) {
        $this->modelo->insertar($nombre, $email, $telefono);
    }

    public function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $this->modelo->actualizar($id, $nombre, $email, $telefono);
    }

    public function eliminar($id) {
        $this->modelo->eliminar($id);
    }
}
