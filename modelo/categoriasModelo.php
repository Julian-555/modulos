<?php
    class Categorias{

                    public $idusuario;
                    public $nombreusuario;

                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from usuario where nombreCategorias = '$this->nombreusuario'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into usuario value(
                                                                                    '$this->idusuario',
                                                                                   
                                                                                    '$this->nombres'
                                                                                    '$this->apellidos'
                                                                                    '$this->direccion_entrega'
                                                                                    '$this->ciudad_de_entrega'
                                                                                    '$this->correo_electronico'
                                                                                    '$this->numero_de_contacto'
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('La usuario fue Creada en el Sistema')</script>";
                                            
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