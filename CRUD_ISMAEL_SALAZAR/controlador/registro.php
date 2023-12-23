<?php

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["propietario"]) and !empty($_POST["vehiculo"]) and !empty($_POST["modelo"])){
        
      $propietario=$_POST["propietario"];
      $vehiculo=$_POST["vehiculo"];
      $modelo=$_POST["modelo"];

      $sql = $conexion->query("INSERT INTO ingreso (Propietario, Vehiculo, Modelo) VALUES ('$propietario', '$vehiculo', '$modelo')");

    if ($sql==1) {
        echo '<div class="alert alert-success">Se realizó el registro correctamente</div';
    } else{
        echo '<div class="alert alert-danger">Error no se pudo registrar</div';
    }

}else{
        echo '<div class="alert alert-warning">Existen campos vacios</div';
    }
}


?>