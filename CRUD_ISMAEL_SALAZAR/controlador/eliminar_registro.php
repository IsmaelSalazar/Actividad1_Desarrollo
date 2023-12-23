<?php

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from ingreso where ID=$id ");
    if ($sql==1){
        echo '<div> Se elimino el registro</div>';
    }else{
        echo '<div> No se pudo eliminar ERROR</div>';
    }
}

?>