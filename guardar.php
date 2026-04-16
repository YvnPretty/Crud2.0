<?php
    include 'Crud.php';
    $nombre = $_POST['nombre'];
    $crud = new Crud();

    if ($crud->Guardar($nombre)) {
        header("location:index.php");
    } else{
        echo "No se guardo";
    }
?>
