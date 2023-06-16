<?php
include("../modelo/pedidoModelo.php");
 
$obj = new pedido();
if($_POST)
{
    $obj->entrega_producto = $_POST['entrega_producto'];
    $obj->estado_factura = $_POST['estado_factura'];
    $obj->fecha_facturacion = $_POST['fecha_facturacion'];
    $obj->hora_factura = $_POST['hora_factura'];
    $obj->id_usuario = $_POST['id_usuario'];
    $obj->numero_factura = $_POST['numero_factura'];
    $obj->valor_factura = $_POST['valor_factura'];
    
    
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
