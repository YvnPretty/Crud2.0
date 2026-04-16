<?php
    include 'Crud.php';
    $id = $_GET['id'];
    $crud = new CRUD();

    if($crud->eliminar($id)) {
        header ("location:index.php");
    } else{
        echo "No fue posiblle eliminar";
    }
?>
