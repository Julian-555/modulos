<?php
    class Usuario{

                    public $id_usuario;
                    public $nombres;
                    public $apellidos;
                    public $direcion_entrega;
                    public $ciudad_de_entrega;
                    public $correo_electronico;
                    public $numero_de_contacto;


                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from usuario where id_usuario = '$this->id_usuario'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into usuario value(
                                                                                    '$this->id_usuario',
                                                                                   
                                                                                    '$this->nombres',
                                                                                    '$this->apellidos',
                                                                                    '$this->direccion_entrega',
                                                                                    '$this->ciudad_de_entrega',
                                                                                    '$this->correo_electronico',
                                                                                    '$this->numero_de_contacto'
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('el usuario fue Creado en el Sistema')</script>";
                                            
                                        }

                    }

                    function modificar(){
                     $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from usuario where id_usuario= '$this->id_usuario'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(!mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario no fue modificado')</script>";
                                        }else{
                                          $update = "update usuario set id_usuario='$this->id_usuario',
                                          nombres='$this->nombres',
                                          apellidos='$this->apellidos',
                                          direccion_entrega='$this->direccion_entrega',
                                          ciudad_de_entrega='$this->ciudad_de_entrega',
                                          correo_electronico='$this->correo_electronico',
                                          numero_de_contacto='$this->numero_de_contacto'
                                          where  id_usuario = '$this->id_usuario' ";
                                          echo $update;
                                          mysqli_query($c,$update);
                                          echo "<script> alert('el usuario fue Modificado en el Sistema')</script>";
                                             }                    
                                          }
                    function eliminar(){
                                          try{
                                          $conet = new Conexion();
                                         $c = $conet->conectando();
                                          $put_off = "delete from usuario where id_usuario='$this->id_usuario'";
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