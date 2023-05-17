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
                            <label for="codigo" class="form-label">Nombre Completo</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Correo electronico</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                        </div>

                        <h5>Sexo</h5>

                    
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
  Femenino
  </label>
</div>





























                   



                        <label for="area_id">Area</label>
                        <select class="form-check-label" id="area_id">
                            <option>Administración</option>
                            <option>Otros</option>
                        </select>
                </div>





                <div class="col-md-12">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" required>


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Deseo_recibir_boletin_informativo" name="Deseo_recibir_boletin_informativo" value="1">
                        <label for="Deseo_recibir_boletin_informativo" class="form-check-label">Deseo recibir boletin informativo</label>
                    </div>

                    <h5>ROLES</h5>


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Profesional_de_proyectos_Desarrollo" name="Profesional_de_proyectos_Desarrollo" value="2">
                        <label for="Profesional_de_proyectos_Desarrollo" class="form-check-label">Profesional de proyectos Desarrollo</label>
                    </div>


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Gerente_estratégico" name="Gerente_estratégico" value="3">
                        <label for="Gerente_estratégico" class="form-check-label">Gerente estratégico</label>

                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Auxiliar_administrativo" name="Auxiliar_administrativo" value="4">
                        <label for="Auxiliar_administrativo" class="form-check-label">Auxiliar administrativo</label>
                    </div>
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