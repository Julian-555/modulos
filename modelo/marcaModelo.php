<?php
    class marca{

                    public $id_imagen;
                    public $nombre_de_marca;

                    

                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from marca where id_imagen = '$this->id_imagen'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into marca value(
                                                                                    '$this->id_imagen',
                                                                                   
                                                                                    '$this->nombre_de_marca'
                                                                                   
                                                                                    
                                                                              
                                                                                    
                                                                                   
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('La venta  fue Creada en el Sistema')</script>";
                                            
                                        }

                    }

                    function modificar(){

                    }   
                    
                    function eliminar(){

                    }

                    function limpiar(){

                    }
                }
                ?>