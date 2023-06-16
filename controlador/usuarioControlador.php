<?php
include('../modelo/usuarioModelo.php');
$obj = new Usuario();
if($_POST){

    $obj->id_usuario = $_POST['id_usuario'];
    $obj->nombres = $_POST['nombres'];
    $obj->apellidos = $_POST['apellidos'];
    $obj->direccion_entrega = $_POST['direccion_entrega'];
    $obj->ciudad_de_entrega = $_POST['ciudad_de_entrega'];
    $obj->correo_electronico = $_POST['correo_electronico'];
    $obj->numero_de_contacto = $_POST['numero_de_contacto'];
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