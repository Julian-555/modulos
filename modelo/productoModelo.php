<?php
    class producto{

                    public $categoria;
                    public $color_producto;
                    public $descripcion_producto;
                    public $id_imagen;
                    public $id_marca;
                    public $id_producto;
                    public $nombre_producto;
                    public $precio_producto;
                    public $stock_producto;
                    public $talla_producto;


                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from producto where id_producto = '$this->id_producto'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into producto value(
                                                                                    '$this->Categoria',
                                                                                   
                                                                                    '$this->color_producto',
                                                                                    '$this->descripcion_producto',
                                                                                    '$this->id_imagen',
                                                                                    '$this->id_marca',
                                                                                    '$this->id_producto',
                                                                                    '$this->nombre_producto',
                                                                                    '$this->precio_producto',
                                                                                    '$this->stock_producto',
                                                                                    '$this->talla_producto'
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('el usuario fue Creado en el Sistema')</script>";
                                            
                                        }

                                    }

                                    function modificar(){
                                       $conet = new Conexion();
                                       $c = $conet->conectando();
                                       $query = "select * from producto where id_producto= '$this->id_producto'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(!mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario no fue modificado')</script>";
                                       }else{
                                         $update = "update producto set categoria='$this->categoria',
                                         color_producto= '$this->color_producto',
                                         descripcion_producto ='$this->descripcion_producto',
                                         id_imagen='$this->id_imagen',
                                         id_marca='$this->id_marca',
                                         id_producto='$this->id_producto',
                                         nombre_producto='$this->nombre_producto',
                                         precio_producto='$this->precio_producto',
                                         stock_producto='$this->stock_producto',
                                         talla_producto='$this->talla_producto'
                                         ";
                                         echo $update;
                                         mysqli_query($c,$update);
                                         echo "<script> alert('el usuario fue Modificado en el Sistema')</script>";
                                            }                    
                                         

                
                                    }   
                                    
                                    function eliminar(){
                                       
                                          try{
                                          $conet = new Conexion();
                                         $c = $conet->conectando();
                                          $put_off = "delete from producto where id_producto='$this->id_producto'";
                                          echo $put_off;
                                          mysqli_query($c,$put_off);
                                          echo "<script> alert('el usuario fue eliminado en el Sistema')</script>";
                                                                 
                                          }catch(Exception $e){
                                             echo "Error";  

                                          }
                                       
                
                                    }
                
                                    function limpiar(){
                
                                    }
                                }
                                ?>