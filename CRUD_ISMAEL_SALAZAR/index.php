<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dfad8e7481.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">CRUD PHP Y MYSQL ISMAEL SALAZAR</h1>
    <?php
    include("modelo/conexion.php");
    include "controlador/eliminar_registro.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
                <h3>Formulario Ingreso de Vehículos</h3>
                <?php
                include("controlador/registro.php");
                ?>
                <div class="mb-3">
                    <label for="TextInput" class="form-label">Nombre Propietario</label>
                    <input type="text" class="form-control" name="propietario">
                </div>
                <div class="mb-3">
                    <label for="TextInput" class="form-label">Marca Vehículo</label>
                    <input type="text" class="form-control" name="vehiculo">
                </div>
                <div class="mb-3">
                    <label for="TextInput" class="form-label">Modelo</label>
                    <input type="tex" class="form-control" name="modelo">
                </div>

                <button type="submit" class="btn btn-primary" name="btningresar" value="ok">Ingresar</button>
        </form>
        <div class="col-8" p-4>
            <table class="table">
                <thead class="bg-green">
                    <tr>
                        <th scope="col">Propietario</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Modelo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" select * from ingreso ");
                    while($datos=$sql->fetch_object()){ ?>
                    <tr>
                        <td><?= $datos->Propietario ?></td>
                        <td><?= $datos->Vehiculo ?></td>
                        <td><?= $datos->Modelo ?></td>
                        <td>
                            <a href="modificar_registro.php?id=<?= $datos->ID?>" class="btn btn-small "><i class="fa-solid fa-pencil"></i></a>
                            <a href="index.php?id=<?= $datos->ID?>" class="btn btn-small "><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>