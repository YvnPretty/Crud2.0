<?php
    include 'Crud.php';
    $crud = new CRUD();

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        if ($crud->actualizar($id, $nombre)) {
            header("location:index.php");
        }
    } else {
        $id = $_GET['id'];
        $datos = $crud->obtenerDatos($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container">
        <h2>Actualizar Usuario</h2>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
            <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
            <button class="btn" type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>
<?php } ?>
