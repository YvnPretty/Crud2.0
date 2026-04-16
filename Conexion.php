<?php
    class Conexion {
        public function conectar(){
            $servidor = "localhost";
            $usuario = "admin_crud";
            $password = "123";
            $db = "CRUD_POO";
            $conexion = mysqli_connect($servidor, $usuario, $password, $db);
            return $conexion;
        }
    }
?>
