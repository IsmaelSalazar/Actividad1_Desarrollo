<?php
include("modelo/conexion.php");
include("controlador/registro.php");
$ID = $_GET["id"];

$sql= $conexion->query("select * from ingreso where ID=$ID ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dfad8e7481.js" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4  m-auto" method="POST">
        <h3>Modificar registros</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/modificar_datos.php";
        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="TextInput" class="form-label">Nombre Propietario</label>
                <input type="text" class="form-control" name="propietario" value="<?= $datos->Propietario ?>">
            </div>
            <div class="mb-3">
                <label for="TextInput" class="form-label">Marca Vehículo</label>
                <input type="text" class="form-control" name="vehiculo" value="<?= $datos->Vehiculo ?>">
            </div>
            <div class="mb-3">
                <label for="TextInput" class="form-label">Modelo</label>
                <input type="tex" class="form-control" name="modelo" value="<?= $datos->Modelo ?>">
            </div>

        <?php }

        ?>

        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
    </form>
</body>

</html>