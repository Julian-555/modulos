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
                             <td>Codigo</td>   
                             <td><input class="form-control form-control-sm" type="text" name="idCategorias" id="idCategorias" value="<?php echo $obj->idCategorias  ?>" placeholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example" readOnly></td>   
                        </tr>
                        <tr>
                            <td>Nombre</td>   
                             <td><input class="form-control form-control-sm" type="text" name="nombreCategorias" id="nombreCategorias"  value="<?php echo $obj->nombreCategorias  ?>"placeholder="Digite el Nombre de la Categoria" aria-label=".form-control-sm example"></td>   
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