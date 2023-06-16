<?php
include('../conexion/conectar.php');
include('../controlador/pedidoControlador.php');

$obj = new Pedido();
if($_POST){

    $obj->entrega_producto = $_POST['entrega_producto'];
    $obj->estado_factura = $_POST['estado_factura'];
    $obj->fecha_facturacion = $_POST['fecha_facturacion'];
    $obj->hora_factura = $_POST['hora_factura'];
    $obj->id_usuario = $_POST['id_usuario'];
    $obj->numero_factura = $_POST['numero_factura'];
    $obj->valor_factura = $_POST['valor_factura'];
    
 

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
                             <td>entrega_producto</td>   
                             <td><input class="form-control form-control-sm" type="text" name="entrega_producto" id="entrega_producto" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>estado_factura</td>   
                             <td><input class="form-control form-control-sm" type="text" name="estado_factura" id="estado_factura" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>fecha_facturacion</td>   
                             <td><input class="form-control form-control-sm" type="text" name="fecha_facturacion" id="fecha_facturacion" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>hora_factura</td>   
                             <td><input class="form-control form-control-sm" type="text" name="hora_factura" id="hora_factura" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>id_usuario</td>   
                             <td><input class="form-control form-control-sm" type="text" name="id_usuario" id="id_usuario" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>numero_factura</td>   
                             <td><input class="form-control form-control-sm" type="text" name="numero_factura" id="numero_factura" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>valor_factura</td>   
                             <td><input class="form-control form-control-sm" type="text" name="valor_factura" id="valor_factura" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                       
                            
                       
                        
                        
                        <a href="pedido.php">
                            <td colspan="2">           
                                <button type="submit" class="btn btn-primary" name="guarda">Guardar</button>
                                </a>
                                <a href="pedido.php">
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