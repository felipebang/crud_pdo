<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $area_id = $_POST['area_id'];
    $boletin = $_POST['boletin'];
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : 0;

    if ($boletin == '') {
        $boletin = 0;
    }







    $query = $con->prepare("UPDATE empleado  SET (nombre=?, email=?, sexo=?, area_id=?, boletin=?, descripcion=? WHERE id=?");
    $resultado = $query->execute(array($nombre, $email, $sexo, $area_id, $boletin,  $descripcion,  $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
   


    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $area_id = $_POST['area_id'];
    $boletin = $_POST['boletin'];
    $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : 0;


    if ($boletin == '') {
        $boletin = 0;
    }


    $query = $con->prepare("INSERT INTO empleado (nombre, email, sexo, area_id,  boletin,  descripcion) VALUES (:cod, :email, :sex, :inv,  :sto, :descri, 1)");
    $resultado = $query->execute(array('cod' => $nombre, 'email' => $email, 'sex' => $sexo, 'inv' => $area_id, 'sto' => $boletin, 'descri' => $descripcion));


    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>