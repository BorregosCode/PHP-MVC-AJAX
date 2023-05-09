<?php

class db
{
    public static function conexion()
    {
        $dsn = 'pgsql:host=localhost;port=5432;dbname=db_madb';
        $usuario = 'dev';
        $password = 'root';

        try {
            $conexion = new PDO($dsn, $usuario, $password);
            // configurar PDO para lanzar excepciones en caso de errores
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch(PDOException $e) {
            echo 'Error al conectarse a la base de datos: ' . $e->getMessage();
            exit();
        }
    }
}