<?php
  require 'nav.html';
  require 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Proveedores</title>
</head>
<body><br>
<!-- card se puede reciclar desde aqui-->
<div align="center">						<!--tamaño de la card -->
	<div class="card text-left" align="" style="width: 70%" >
  		<div class="card-header"> <!--Cabecera de la car -->
  			<h5>Proveedores</h5>  
  		</div>

  		<div class="card-body"> <!--cuerpo de la card -->
  			<form class="form-inline">
  				<div class="form-group mb-2">
    				<label for="staticEmail2" class="sr-only">Proveedores</label>
    				<input type="text" readonly class="form-control-plaintext" id="proveedor" value="Proveedor" style="width: 80px">
  				</div>
  				<div class="form-group mx-sm-3 mb-2">
    				<label for="inputPassword2" class="sr-only">prov</label>
    				<input type="text" class="form-control" id="provee" placeholder="Nombre del proveedor" style="width: 400px">
  				</div>
  				<button type="button" class="btn btn-outline-primary">Buscar proveedor</button>
  				<button type="button" class="btn btn-outline-primary"><a href="agregar-proveedor.php">Nuevo proveedor</a></button>
			</form>
		</div>

  		<div class="card-footer">
  			

        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Dirección</th>
              <th scope="col">Telefono</th>
              <th scope="col">E-mail</th>
            </tr>
          </thead>

          <?php
            $sql="SELECT * FROM proveedor";
            $result=mysqli_query($conn, $sql);

            while ($mostrar=mysqli_fetch_array($result)) {
          ?>

        <tbody>
          <tr>
              <td><?php echo $mostrar['idProveedor'] ?></td>
              <td><?php echo $mostrar['NombreProveedor'] ?></td>
              <td><?php echo $mostrar['DireccionProveedor'] ?></td>
              <td><?php echo $mostrar['Telefono'] ?></td>
              <td><?php echo $mostrar['EmailProv'] ?></td>
          </tr>
        </tbody>
        <?php
          }
        ?>
        </table>
      </div>


  		</div>
	</div>
</div> <!-- card se puede reciclar hasta aqui-->
</body>
</html>