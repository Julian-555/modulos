<?php
include('../modelo/marcaModelo.php');
$obj = new marca();
if($_POST){

    
    $obj->nombre_de_marca = $_POST['nombre_de_marca'];
   
    
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
}
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>