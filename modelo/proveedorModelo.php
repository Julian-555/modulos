<?php
class Proveedor{
		public $idProveedor;
		public $nombreProveedor;
        public $direccionProveedor;
        public $telefonoProveedor;
        
               
						
                 function agregar(){
					 $c = new Conexion();
					 $cone = $c->conectando();
				     $sql = "select * from proveedores where nombreProveedor = '$this->nombreProveedor'";
				     $rs = mysqli_query($cone,$sql);
					 if(mysqli_fetch_array($rs))
								{
								echo "<script> alert('El Proveedor ya existe en el sistema de Información')</script>";
								}								
								else{
									$insertar = "insert into proveedores values('$this->idProveedor',
                                                                            '$this->nombreProveedor',
                                                                            '$this->direccionProveedor',
                                                                            '$this->telefonoProveedor'
                                                                            )";    
									echo $insertar;
									mysqli_query($cone,$insertar);	
									echo "<script> alert('El proveedor fue creada en el sistema de información')</script>";
								
								}									
				 				
				 }
				 	
				

				function modificar(){
									$c = new Conexion();
								    $cone = $c->conectando();
									$sql = "select * from categorias where idCategorias ='$this->idCategorias'";
									$r = mysqli_query($cone,$sql);
									if(!mysqli_fetch_array($r))
																{
																echo "<script> alert('El resultado a Modificar ya existe')</script>";
																}
																else
																	{
																	$id = "update categorias set
																	       idCategorias = '$this->idCategorias',
																	       nombreCategorias = '$this->nombreCategorias'
                                                                           where idCategorias = '$this->idCategorias'";
																	mysqli_query($cone,$id);
																	echo $id;
																	echo "<script> alert('El resultado  fue Modificado ')</script>";				
																		
																}
				}

				function eliminar(){
									$c = new Conexion();
									$cone = $c->conectando();
									$sql= "delete from categorias where idCategorias='$this->idCategorias'";
									if(mysqli_query($cone,$sql))
									{
									echo "<script> alert('El resultado fue Eliminado del Sistema de Información');</script>";
									}
										else
											{
											echo"<script> alert('Atencion  no se puede eliminar el Registro debido a que tiene datos relacionadas')</script>";
											}
								}
				

}
?>