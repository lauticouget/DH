<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio integrador 1 - Carga de Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .spacer {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    
    </style>
</head>
<body>
    <div class="container">
    <div class="spacer"></div>
        <div class="main-title col-6 offset-3">
            <h3>Ingrese los datos del empleado:</h3>
        </div>
        <div class="spacer"></div>
        <form class="col-6 offset-3" action="mostrar.php" method="POST">
            <div class="form-group">
                <label for="apellido">Nombre</label>
                <input type="text" class="form-control" name="nombre" require>
            </div>
                <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" require>
            </div>
            <div class="form-group">
                <label for="sueldo">DNI</label>
                <input type="number" class="form-control" name="dni">
            </div>
            <div class="form-group form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="masculino">
                <label class="form-check-label" for="masculino">Masculino</label>
            </div>
            <div class="form-group form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="femenino">
                <label class="form-check-label" for="masculino">Femenino</label>
            </div>
            <div class="form-group">
                <label for="cargo">Seleccione cargo</label>
                <select class="form-control" name="cargo">
                    <option>Docente</option>
                    <option>Adjunto</option>
                    <option>Especialista</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sueldo">Sueldo bruto</label>
                <input type="number" class="form-control" name="sueldo_bruto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>