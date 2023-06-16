<?php
include('../conexion/conectar.php');
include('../controlador/marcaControlador.php');

$obj = new marca();
if($_POST){

    
    $obj->nombre_de_marca = $_POST['nombre_de_marca'];
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
        <form action="" name="agregarCategorias" method="POST">
            <table  class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Agregar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td>id_imagen</td>   
                             <td><input class="form-control form-control-sm" type="text" name="di_imagen" id="di_imagen" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example"></td>   
                        </tr>
                        <tr>
                            <td>nombre_de_marca</td>   
                             <td><input class="form-control form-control-sm" type="text" name="nombre_de_marca" id="nombre_de_marca" placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
                        </tr>
                       
                        
                        <tr>
                        
                            <td colspan="2">
                                <button type="submit" class="btn btn-primary" name="guarda">Guardar</button>
                               
                                <a href="marca2.php">
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