<?php

if (!empty($_POST["btnmodificar"])){

    if (!empty($_POST["propietario"]) and !empty($_POST["vehiculo"] ) and !empty($_POST["modelo"])){
        $id=$_POST["id"];
        $propietario=$_POST["propietario"];
        $vehiculo=$_POST["vehiculo"];
        $modelo=$_POST["modelo"];

        $sql=$conexion->query(" update ingreso set Propietario='$propietario',Vehiculo='$vehiculo',Modelo='$modelo' where ID=$ID ");
    if($sql==1){
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>No se modifico el registro</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>No pueden haber campos vacios</div>";
    }
}

?>