<?php
    class pedido{

                    public $entrega_producto;
                    public $estado_factura;
                    public $fecha_facturacion;
                    public $hora_factura;
                    public $id_usuario;
                    public $numero_factura;
                    public $valor_factura;



                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from pedido where id_usuario = '$this->id_usuario'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('El Pedido ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into pedido value(
                                                                                    '$this->entrega_producto',
                                                                                    '$this->estado_factura',
                                                                                    '$this->fecha_facturacion',
                                                                                    '$this->hora_factura',
                                                                                    '$this->id_usuario',
                                                                                    '$this->numero_factura',
                                                                                    '$this->valor_factura'
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