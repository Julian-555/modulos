<?php
include("../conexion/conectar.php");
include('../controlador/facturaControlador.php');


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
    <div class="container shadow p-3 mb-5 bg-body rounded " >
        <h2><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i>Clientes</h2>
        <form action="" name="clientes" method="POST">
            <table class="table ">
                <thead>
                    <tr>
                        <th>
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>                   
                        
                        </th>
                        <th>
                            <div class="marco">
                                <button type="button" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</button>
                            </div>
                        </th>
                    </tr>
                </thead>
            </table>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Digite el Nombre o Código del Cliente" aria-label="Search">
                         <button class="btn btn-outline-success"  type="submit"> Buscar</button>
                    </form>
                </div>
            </nav>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-sm shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <td colspan="9" class="p-3 mb-2 bg-primary text-white"><h5>Lista de Clientes</h5></td>
                        </tr>
                    </thead>
                    <tbody >
                        <tr class="table-secondary">
                            <td>Código</td>
                            <td>Documento</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Telefono</td>
                            <td>Email</td>
                            <td>Modificar</td>
                            <td>Eliminar</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>7</td>
                            <td>Carlos</td>
                            <td>Herrera</td>
                            <td>258</td>
                            <td>h@gnauk</td>
                            <td><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            <td><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                    
                                    
                            
                        </tr>
                    </tbody>
                </table>
            </div>    
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <span class="page-link">Atras</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav> 
        </form>
    </div>
</body>
</html>