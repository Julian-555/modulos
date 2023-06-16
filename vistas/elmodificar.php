<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Modificar Proveedor</title>
</head>
<body>
      <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-primary ">
      <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
        <form action="" name="modificar proveedor">
          <h3>Modificar Información de los Proveedores</h3>
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <td class="table-primary ">Nit Proveedor</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="NitProveedor"placeholder="Identificación de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Nombres de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese Nombres del Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Apellidos de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese Apellidos del Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Razon Social de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Razonsocial"placeholder="Ingrese la Razon Social del Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Dirección de Empresa Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Direccion"placeholder="Ingrese Dirección de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Ciudad de Origen de la Empresa</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Ciudad Origen Empresa"placeholder="Ingrese Ciudad Origen de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Número de Telefono de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Telefono"placeholder="Ingrese Numero Telefonico de Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Correo Electronico Proveedor</td>
                <td><input class="border border-dark form-control form-control-sm" type="email" name="Correo Electronico"placeholder="Ingrese Correo Electronico" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Vendedor del Proveedor</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="text" name="Vendedor"placeholder="Ingrese Nombre de Vendedor" aria-label=".form-control-sm example"></td>
              </tr>
            </tbody>
          </table>
          <td colspan="2">
                  <center>
                  <a href="Proveedores_tecnologia.php">
                      <button class=" btn-sm btn btn-outline-success " type="button" name="guarda">Guardar Cambios</button>
                  </a>

                  <a href="Proveedores_tecnologia.php">
                      <button class=" btn-sm  btn btn-outline-danger " type="button" name="salir">Cerrar</button>
                    </a>  
                  </center>
                  </td>
        </form>
      </div>
</body>
</html>