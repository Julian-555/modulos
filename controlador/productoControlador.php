<?php
include('../modelo/productoModelo.php');
$obj = new producto();
if($_POST){

    $obj->categoria = $_POST['categoria'];
    $obj->color_producto = $_POST['color_producto'];
    $obj->descripcion_producto = $_POST['descripcion_producto'];
    $obj->id_imagen = $_POST['id_imagen'];
    $obj->id_marca = $_POST['id_marca'];
    $obj->id_producto = $_POST['id_producto'];
    $obj->nombre_producto = $_POST['nombre_producto'];
    $obj->precio_producto = $_POST['precio_producto'];
    $obj->stock_producto = $_POST['stock_producto'];
    $obj->talla_producto = $_POST['talla_producto'];


    


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