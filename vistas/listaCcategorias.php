



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descripcion" content="html5,css,php ,jsp">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .body{
            align-items: center;
        }
        .container{
            margin-top: 50px;
        }
        
    </style>

    <title>categoria</title>
    
</head>
<body>
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
        <h2 class="h2">lista de categorias </h2>
        <form action="" name="categoria" method="post">
    
            <table class="table">
            <thead>
                <tr>
                    <th> <button class="btn btn-primary" name="nuevo" type ="button">agregar</button></th>
                    <th>buscar</th>
                    <th><input class= "form-control form-control-sm name="buscar" placeholder="digite la categoria a buscar"></th>
                    <th><button class="btn btn-danger" name="consulta" type= "submit">buscar</button></th>
                    <th><button class="btn btn-success" name="lista" type= "button">listar</button></th>
                    <th><button class="btn btn-warning" name="cerrar"type="button">salir</button></th>
                
                </tr>
            </thead>
            </table>
            <br>
            <hr>
            <table class="table table-sm table striped">
                <thead class= "table-info">
                    <tr>
                        <th>codigo</th>
                        <th>nombres</th>
                        <th>modificar</th>
                        <th>eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>lacteos</td>
                        <th><button class="btn btn-primary" name="modifica"type="submit">modificar</button></th>
                        <th><button class="btn btn-danger" name="elimina"type="submit">eliminar</button></th>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>jugos</td>
                        <th><button class="btn btn-primary" name="modifica"type="submit">modificar</button></th>
                        <th><button class="btn btn-danger" name="elimina"type="submit">eliminar</button></th>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>jugos</td>
                        <th><button class="btn btn-primary" name="modifica"type="submit">modificar</button></th>
                        <th><button class="btn btn-danger" name="elimina"type="submit">eliminar</button></th>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>jugos</td>
                        <th><button class="btn btn-primary" name="modifica"type="submit">modificar</button></th>
                        <th><button class="btn btn-danger" name="elimina"type="submit">eliminar</button></th>
                    </tr>
                </tbody>
                
            </table>
            </div>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
     </li>
     </ul>
        </nav>
     </div>
    </form>
  


</div>


</body>
</html>