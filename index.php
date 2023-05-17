<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$boletin = 1;

$comando = $con->prepare("SELECT id, nombre, email, sexo, boletin, area_id,  descripcion FROM empleado WHERE boletin=:mi_boletin ORDER BY sexo ASC");
$comando->execute(['mi_boletin' => $boletin]);
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Productos
                        <a href="nuevo.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Area</th>
                                <th>Boletin</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($resultado as $row) {
                               
                            ?>
                                <tr>

                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['sexo']; ?></td>
                                    <td><?php echo $row['area_id']; ?></td>
                                    <td><?php echo $row['boletin']; ?></td>
                                    <td><a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a></td>
                                    <td><a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>