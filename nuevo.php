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

                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Correo electronico</label>
                            <input type="text" id="email" name="email" class="form-control" required autofocus>
                        </div>

                        <h5>Sexo</h5>


                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="sexo" checked required autofocus>
                            <label class="form-check-label" for="Masculino">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="sexo" required autofocus>
                            <label class="form-check-label" for="Femenino">
                                Femenino
                            </label>
                        </div>





                        <div class="col-md-12">
                        <label for="cars">Area</label>
                        <select name="area_id" id="area_id">
                            <option value="Desarrollador">Desarrollador</option>
                            <option value="Analista">Analista</option>
                            <option value="Tester">Tester</option>
                            <option value="Diseñador">Diseñador</option>
                            <option value="Profesional PMO">Profesional PMO</option>
                            <option value="Profesional de servicios">Profesional de servicios</option>
                            <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                            <option value="Codirector">Codirector</option>
                        </select>
                        </div>


                        <div class="col-md-12">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <h5>ROLES</h5>
                            <input class="form-check-input" type="checkbox" name="boletin" value="Deseo recibir boletin informativo">
                            Deseo recibir boletin informativo <br />
                            <input class="form-check-input" type="checkbox" name="boletin" value="Profesional de proyectos Desarrollo">
                            Profesional de proyectos Desarrollo<br />
                            <input class="form-check-input" type="checkbox" name="boletin" value="Gerente estratégico">
                            Gerente estratégico<br />
                            <input type="checkbox" class="form-check-input" name="boletin" value="Auxiliar administrativo">
                            Auxiliar administrativo<br />
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