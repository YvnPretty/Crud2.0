<?php
    include 'Conexion.php';
    class Crud extends Conexion {
        public function Guardar($nombre) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_nombres 
                            (nombre) VALUES ('$nombre')";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function mostrar() {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_nombres";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all(
                $respuesta,
                MYSQLI_ASSOC
            );
        }

        public function eliminar($id) {
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_nombres
                        WHERE id = '$id' ";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado;
        }

        public function actualizar($id, $nombre) {
            $conexion = parent::conectar();
            $sql = "UPDATE t_nombres SET nombre = '$nombre'
                        WHERE id = '$id' ";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado;
        }

        public function obtenerDatos($id) {
            $conexion = parent::conectar();
            $sql = "SELECT id, nombre 
                FROM t_nombres WHERE id = '$id'";
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_array($result);
        }
    }
?>
