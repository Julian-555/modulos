<?php
include("../modelo/proveedorModelo.php");
 
$obj = new Proveedor();
if($_POST)
{

$obj->idProveedor = $_POST['idProveedor'];
$obj->nombreProveedor = $_POST['nombreProveedor'];
$obj->direccionProveedor = $_POST['direccionProveedor'];
$obj->telefonoProveedor = $_POST['telefonoProveedor'];
}

if(isset($_POST['guarda']))
{
    $obj->agregar();
}
if(isset($_POST['modifica']))
{
$obj->modificar();
}
if(isset($_POST['elimina']))
{
$obj->eliminar();
}


?>
