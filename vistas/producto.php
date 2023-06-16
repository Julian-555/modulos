<?php
include("../conexion/conectar.php");

if($_POST)
{
    $obj->categoria = $_POST['categoria'];
    
}



$conet = new Conexion();
$c = $conet->conectando();
$query="select count(*) as totalRegistros from producto";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;

$maximoRegistros = 10;
//echo $totalRegistros;
if(empty($_GET['pagina'])){
    $pagina=1;
}else{
    $pagina=$_GET['pagina'];
}
$desde = ($pagina-1)*$maximoRegistros;
$totalPaginas=ceil($totalRegistros/$maximoRegistros);
//echo $totalPaginas;


if(isset($_POST['search'])){
    echo "llegue";
    $query2="select * from producto where categoria like '%$obj->categoria%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="select * from producto limit $desde,$maximoRegistros ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
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
    <div class="container shadow p-3 mb-5 bg-body rounded " >
        <h2><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>productos</h2>
        <form action="" name="producto" method="POST">
            <table class="table ">
                <thead>
                    <tr>
                    
                    <th>
                            <a href="producto2.php">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>                   
                            </a>
                        </th>
                        
                    
                        
                        
                    </tr>
                </thead>
            </table>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="categoria"  placeholder="Digite el Nombre o Código de la Categoria" aria-label="Search">
                         <button class="btn btn-outline-success" name="search"  type="submit"> Buscar</button>
                    </form>
                </div>
            </nav>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-sm shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <td colspan="12" class="p-3 mb-2 bg-primary text-white"><h5>Lista de productos</h5></td>
                        </tr>
                    </thead>
                    <tbody >
                        <tr class="table-secondary">
                            <td>categoria
                                
                            </td>
                            <td>color_producto</td>
                            
                            <td>descripcion_producto</td>
                            <td>id_imagen</td>
                            <td>id_marca</td>
                            <td>id_producto</td>
                            <td>nombre_producto</td>
                            <td>precio_producto</td>
                            <td>stock_producto</td>
                            <td>talla_producto</td>
                            <td>Modificar</td>
                            <td>Eliminar</td>
                            
                            
                        </tr>
                        
                            <?php
                                if($arreglo2==0){
                                    //echo "No existen Registros";
                                ?>
                                <div class="alert alert-success" role="alert">
                                        <?php echo "No hay registros" ?>
                                </div>
                                <?php 
                                }   
                                 else{
                                    do{   
                               ?> 
                        <tr>
                            <td><?php echo $arreglo2[0] ?></td>
                            <td><?php echo $arreglo2[1] ?></td>
                            <td><?php echo $arreglo2[2] ?></td>
                            <td><?php echo $arreglo2[3] ?></td>
                            <td><?php echo $arreglo2[4] ?></td>
                            <td><?php echo $arreglo2[5] ?></td>
                            <td><?php echo $arreglo2[6] ?></td>
                            <td><?php echo $arreglo2[7] ?></td>
                            <td><?php echo $arreglo2[8] ?></td>
                            <td><?php echo $arreglo2[9] ?></td>
                            <td>
                                <a href="<?php 
                                    if($arreglo2[5]<>''){
                                        echo"modificarproducto.php?key=".urlencode($arreglo2[5]);
                                    }
                                ?>">
                                
                                    <button type="button" >Modificar</button>
                                </a>
                            </td>
                            <td>
                            <a href="<?php 
                                    if($arreglo2[0]<>''){
                                        echo"eliminarproducto.php?key=".urlencode($arreglo2[5]);
                                    }
                                    ?>">
                                <button type="button">Eliminar</button>
                                </a>
                            </td>

                            </td>                

                        
                            
                            
                                    
                                    
                            
                        </tr>
                        <?php
                            }while($arreglo2 = mysqli_fetch_array($resultado2));
                        }
                        ?>
                    </tbody>
                </table>
            </div>    
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <?php 
                    if($pagina!=1){
                    ?>
                    <li class="page-item ">
                        <a class="page-link" href="?pagina=<?php echo 1; ?>"><</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><<</a>
                    </li>
                    <?php
                    }
                    for($i=1; $i<=$totalPaginas; $i++){
                        if($i==$pagina){
                            echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';    
                        }
                        else{
                            echo'<li class="page-item "><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>'; 
                        }
                    }
                    if($pagina !=$totalPaginas){
                    ?>
                    
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina+2; ?>">>></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </form>
    </div>
</body>
</html>