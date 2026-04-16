<?php
    include 'Crud.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Crystal Clear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container">
        <h1>Gestión de Usuarios</h1>
        <form action="guardar.php" method="POST">
            <input type="text" placeholder="Ingresa tu nombre" name="nombre" required>
            <button class="btn" type="submit">Guardar</button>
        </form>
        <div class="table-responsive">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                <?php
                    $crud = new CRUD();
                    $datos = $crud->mostrar();
                    foreach($datos as $dato):
                        $id = $dato['id'];
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><a href="actualizar.php?id=<?php echo $id; ?>" class="btn btn-edit">Actualizar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $id; ?>" class="btn btn-delete">Eliminar</a></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </table>
        </div>
    </div>
</body>
</html>
