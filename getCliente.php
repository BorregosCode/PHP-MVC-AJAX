<?php 

require_once 'controller/ClienteController.php';

$controller = new ClienteController();

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
  
    switch ($accion) {
      case 'listar':
        $controller->listar();
        break;
      case 'insertar':
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $controller->insertar($nombre, $email, $telefono);
        break;
      case 'actualizar':
        $controller->actualizar();
        break;
      case 'eliminar':
        $id = $_POST['id'];
        $controller->eliminar($id);
        break;
      default:
        // Manejar un valor de acción inválido aquí
        break;
    }
  } else {
    // Manejar el caso en que no se proporciona ninguna acción
  }
  