<?php
  require 'nav.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Nuevo Proveedor</title>
</head>
<body><br>
	<div align="center">
		<div class="card text-left" align="" style="width: 70%" >
			<div class="card-header"> <!--Cabecera de la car -->
  				<h5>Agregar Proveedor</h5>  
  			</div>
  			<div class="card-body">
  				<form action="sql-proveedor.php" method="POST">
  				<div class="form-row">
  					<div class="form-group col-md-6">
      					<label for="namepro">Nombre</label>
      					<input type="text" class="form-control" id="namepro" name="namepro" placeholder="Nombre del proveedor" required="">
    				</div>
    				<div class="form-group col-md-6">
      					<label for="direpro">Dirección</label>
                <input type="text" class="form-control" id="direpro" name="direpro" placeholder="Dirección del proveedor" required="">
    				</div>
            <div class="form-group col-md-6">
                <label for="Telpro">Telefono</label>
                <input type="text" class="form-control" id="Telpro" name="Telpro" placeholder="Telefono" required="">
            </div>
            <div class="form-group col-md-6">
                <label for="Emailpro">Email</label>
                <input type="email" class="form-control" id="Emailpro" name="Emailpro" placeholder="Email" required="">
            </div>
  				</div>
  				<div class="form-group">
  				</div>
  				<button type="" class="btn btn-primary"><a href="proveedor.php" style="color: white">Cancelar</a></button>
  				<button type="submit" class="btn btn-primary">Agregar proveedor</button>
			</form>
  			</div>
			
		</div>
	</div>
</body>
</html>