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
$key = $_GET['key'];
$conet = new Conexion();
$c = $conet->conectando();
    $query2="select * from producto where id_producto = '$key' ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);

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
        <form action="" name="modificarproducto" method="POST">
            <table  class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Modificar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td>categoria</td>   
                             <td><input class="form-control form-control-sm" type="text" name="categoria" id="categoria" value="<?php echo $arreglo2[0]  ?>" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" ></td>   
                        </tr>
                        <tr>
                            <td>color_producto </td>   
                             <td><input class="form-control form-control-sm" type="text" name="color_producto" id="color_producto"  value="<?php echo $arreglo2[1]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>descripcion_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="descripcion_producto" id="descripcion_producto"  value="<?php echo $arreglo2[2]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_imagen</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_imagen" id="id_imagen"  value="<?php echo $arreglo2[3]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_marca</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_marca" id="id_marca"  value="<?php echo $arreglo2[4]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_producto" id="id_producto"  value="<?php echo $arreglo2[5]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>nombre_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="nombre_producto" id="nombre_producto"  value="<?php echo $arreglo2[6]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>precio_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="precio_producto" id="precio_producto"  value="<?php echo $arreglo2[7]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>stock_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="stock_producto" id="stock_producto"  value="<?php echo $arreglo2[8]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>talla_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="talla_producto" id="talla_producto"  value="<?php echo $arreglo2[9]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td colspan="2">

                                    <button type="submit" class="btn btn-primary" name="modifica">Modificar</button>
                                   
                                    <a href="categorias.php">
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