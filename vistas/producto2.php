<?php
include('../conexion/conectar.php');
include('../controlador/productoControlador.php');

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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/css/bootstrap.min.css">
    <link rel="stylesheet" href="../config/css/font-awesome.min.css">	
    <link rel="stylesheet" href="../config/css/luna.css">
    <title>Administracion</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded ">
        <form action="" name="agregarproducto" method="POST">
            <table  class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Agregar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td>Categoria</td>   
                             <td><input class="form-control form-control-sm" type="text" name="categoria" id="categoria" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>color_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="color_producto" id="color_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>descripcion_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="descripcion_producto" id="descripcion_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_imagen</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_imagen" id="id_imagen" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_marca</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_marca" id="id_marca" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_producto" id="id_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>nombre_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="nombre_producto" id="nombre_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>precio_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="precio_producto" id="precio_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>stock_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="stock_producto" id="stock_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>talla_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="talla_producto" id="talla_producto" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                       
                        
                        
                        <a href="producto2.php">
                            <td colspan="2">           
                                <button type="submit" class="btn btn-primary" name="guarda">Guardar</button>
                                </a>
                                <a href="producto2.php">
                                    <button type="button" class="btn btn-danger">Salir</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
            </table>
        </form>
    </div>
</body>
</html>