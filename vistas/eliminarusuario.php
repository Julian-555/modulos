<?php
include('../conexion/conectar.php');
include('../controlador/usuarioControlador.php');
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
$key = $_GET['key'];
$conet = new Conexion();
$c = $conet->conectando();
    $query2="select * from usuario where id_usuario = '$key' ";
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
        <form action="" name="agregarCategorias" method="POST">
            <table  class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                             <td>id_usuario</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_usuario" id="id_usuario" value="<?php echo $arreglo2[0]  ?>" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" readOnly></td>   
                        </tr>
                        <tr>
                            <td>nombres </td>   
                             <td><input class="form-control form-control-sm" type="text" name="nombres" id="nombres"  value="<?php echo $arreglo2[1]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>apellidos</td>   
                             <td><input class="form-control form-control-sm" type="text" name="apellidos" id="apellidos"  value="<?php echo $arreglo2[2]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>direccion_entrega</td>   
                             <td><input class="form-control form-control-sm" type="text" name="direccion_entrega" id="direccion_entrega"  value="<?php echo $arreglo2[3]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>ciudad_de_entrega</td>   
                             <td><input class="form-control form-control-sm" type="text" name="ciudad_de_entrega" id="ciudad_de_entrega"  value="<?php echo $arreglo2[4]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>correo_electronico</td>   
                             <td><input class="form-control form-control-sm" type="text" name="correo_electronico" id="correo_electronico"  value="<?php echo $arreglo2[5]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>numero_de_contacto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="numero_de_contacto" id="numero_de_contacto"  value="<?php echo $arreglo2[6]  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td colspan="2">

                                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
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