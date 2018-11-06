<?php
  require 'nav.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Nuevo Cliente</title>
</head>
<body><br>
	<div align="center">
		<div class="card text-left" align="" style="width: 70%" >
			<div class="card-header"> <!--Cabecera de la car -->
  				<h5>Agregar Cliente</h5>  
  			</div>
  			<div class="card-body">
  				<form action="sql-cliente.php" method="POST">
  				<div class="form-row">
  					<div class="form-group col-md-6">
      					<label for="namecli">Nombre</label>
      					<input type="text" class="form-control" id="namecli" name="namecli" placeholder="Nombre del cliente" required="">
    				</div>
            <div class="form-group col-md-6">
                <label for="Apellcli">Apellido</label>
                <input type="text" class="form-control" id="Apellcli" name="Apellcli" placeholder="Apellido del cliente" required="">
            </div>
    				<div class="form-group col-md-6">
      					<label for="direcli">Dirección</label>
                <input type="text" class="form-control" id="direcli" name="direcli" placeholder="Dirección del cliente" required="">
    				</div>
            <div class="form-group col-md-6">
                <label for="Telcli">Telefono</label>
                <input type="text" class="form-control" id="Telcli" name="Telcli" placeholder="Telefono" required="">
            </div>
            <div class="form-group col-md-6">
                <label for="Emailcli">Email</label>
                <input type="email" class="form-control" id="Emailcli" name="Emailcli" placeholder="Email" required="">
            </div>
  				</div>
  				<div class="form-group">
  				</div>
  				<button type="" class="btn btn-primary"><a href="clientes.php" style="color: white">Cancelar</a></button>
  				<button type="submit" class="btn btn-primary">Agregar cliente</button>
			</form>
  			</div>
			
		</div>
	</div>
</body>
</html>