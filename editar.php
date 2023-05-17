<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];
$boletin = 1;

$query = $con->prepare("SELECT  nombre, email, sexo,  area_id,  descripcion FROM empleado WHERE boletin=:mi_boletin ORDER BY sexo ASC");
$comando->execute(['mi_boletin' => $boletin]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
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
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Correo electronico</label>
                            <input type="text" id="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required autofocus>
                        </div>



                        <h5>Inventario</h5>

                        <div class="col-md-12">
                            <div class="form-check">
                              
                                <input type="checkbox" class="form-check-input" id="sexo" name="sexo" value="2" <?php
                                                                                                                        if ($row['sexo']) {
                                                                                                                            echo 'checked';
                                                                                                                        }
                                                                                                                        ?>>
                                < </div>
                            </div>
                            <div class="col-md-4">
                                <label for="area_id" class="form-label"><Area></Area></label>
                                <input type="text" id="area_id" name="area_id" value="<?php echo $row['area_id']; ?>" class="form-control">
                            </div>

                            <div class="col-md-8">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $row['descripcion']; ?>" required>
                            </div>
                    
                            <div class="col-md-12">
                                <div class="form-check">
                                    
                                
                                    <input type="checkbox" class="form-check-input" id="boletin" name="boletin" value="4"  <?php
                                                                                                                        if ($row['boletin']) {
                                                                                                                            echo 'checked';
                                                                                                                        }
                                                                                                                        ?>>
                                    < </div>
                                </div>

                                <div class="col-md-12">
                                    <a class="btn btn-secondary" href="index.php">Regresar</a>
                                    <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>