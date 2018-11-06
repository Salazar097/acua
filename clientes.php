<?php
  require 'nav.html';
  require 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Clientes</title>
</head>
<body><br>
<!-- card se puede reciclar desde aqui-->
<div align="center">						<!--tamaño de la card -->
	<div class="card text-left" align="" style="width: 70%" >
  		<div class="card-header"> <!--Cabecera de la car -->
  			<h5>Clientes</h5>  
  		</div>

  		<div class="card-body"> <!--cuerpo de la card -->
  			<form class="form-inline">
  				<div class="form-group mb-2">
    				<label for="staticEmail2" class="sr-only">Clienets</label>
    				<input type="text" readonly class="form-control-plaintext" id="clienet" value="Cliente" style="width: 70px">
  				</div>
  				<div class="form-group mx-sm-3 mb-2">
    				<label for="inputPassword2" class="sr-only">client</label>
    				<input type="text" class="form-control" id="cliente" placeholder="Nombre del cliente" style="width: 400px">
  				</div>
  				<button type="button" class="btn btn-outline-primary">Buscar cliente</button>
  				<button type="button" class="btn btn-outline-primary"><a href="agregar-cliente.php">Nuevo cliente</a></button>
			</form>
		</div>

  		<div class="card-footer">
        
  			<div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Dirección</th>
              <th scope="col">Telefono</th>
              <th scope="col">E-mail</th>
            </tr>
          </thead>

          <?php
            $sql="SELECT * FROM cliente";
            $result=mysqli_query($conn, $sql);

            while ($mostrar=mysqli_fetch_array($result)) {
          ?>

        <tbody>
          <tr>
              <td><?php echo $mostrar['idCliente'] ?></td>
              <td><?php echo $mostrar['NombreC'] ?></td>
              <td><?php echo $mostrar['ApellidoCliente'] ?></td>
              <td><?php echo $mostrar['DireccionCliente'] ?></td>
              <td><?php echo $mostrar['Telefono'] ?></td>
              <td><?php echo $mostrar['Email'] ?></td>
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

		
	