<?php
  require 'nav.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Nuevo Producto</title>
</head>
<body><br>
	<div align="center">
		<div class="card text-left" align="" style="width: 70%" >
			<div class="card-header"> <!--Cabecera de la car -->
  				<h5>Agregar Producto</h5>  
  			</div>
  			<div class="card-body">
  				<form action="sql-producto.php" method="POST">
  				  <div class="form-row">
  					  <div class="form-group col-md-6">
      					<label for="inputname">Nombre</label>
      					<input type="text" class="form-control" id="inputname" placeholder="Nombre">
    				  </div>
              <div class="form-group col-md-6">
                <label for="inputcost">Costo</label>
                <input type="text" class="form-control" id="inputcost" placeholder="Costo del producto">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPre">Precio</label>
                <input type="text" class="form-control" id="inputPre" placeholder="Precio de venta">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCod">Codigo</label>
                <input type="text" class="form-control" id="inputCod" placeholder="Codigo del producto">
              </div>
    				  <div class="form-group col-md-4">
      					<label for="inputState">Estado</label>
      					<select id="inputState" class="form-control">
        					<option selected>Activo</option>
        					<option>Inactivo</option>
      					</select>
    				  </div>
  				  </div>
  				  <div class="form-group"></div>
  				<button type="submit" class="btn btn-primary"><a href="producto.php" style="color: white">Cancelar</a></button>
  				<button type="submit" class="btn btn-primary" id="Agrega">Agregar producto</button>
			    </form>
  			</div>
		</div>
	</div>
</body>
</html>