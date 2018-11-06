<?php
  require 'nav.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Productos</title>
</head>
<body><br>
<!-- card se puede reciclar desde aqui-->
<div align="center">						<!--tamaño de la card -->
	<div class="card text-left" align="" style="width: 70%" >
  		<div class="card-header"> <!--Cabecera de la car -->
  			<h5>Productos</h5>  
  		</div>

  		<div class="card-body"> <!--cuerpo de la card -->
  			<form class="form-inline">
  				<div class="form-group mb-2">
    				<label for="staticEmail2" class="sr-only">Producto</label>
    				<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre" style="width: 70px">
  				</div>
  				<div class="form-group mx-sm-3 mb-2">
    				<label for="inputPassword2" class="sr-only">Prod</label>
    				<input type="text" class="form-control" id="inputPassword2" placeholder="Nombre del producto" style="width: 400px">
  				</div>
  				<button type="button" class="btn btn-outline-primary">Buscar producto</button>
  				<button type="button" class="btn btn-outline-primary"><a href="agregar-producto.php">Nuevo producto</a></button>
			</form>
		</div>

  		<div class="card-footer">
  			
  		</div>
	</div>
</div> <!-- card se puede reciclar hasta aqui-->
</body>
</html>

		
	