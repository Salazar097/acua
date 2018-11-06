<?php
  require 'nav.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Nuevo empleado</title>
</head>
<body><br>
	<div align="center">
		<div class="card text-left" align="" style="width: 70%" >
			<div class="card-header"> <!--Cabecera de la car -->
  				<h5>Agregar empleado</h5>  
  			</div>
  			<div class="card-body">
  				<form action="sql-empleado.php" method="POST">
  				<div class="form-row">
  					<div class="form-group col-md-6">
      					<label for="nameemp">Nombre</label>
      					<input type="text" class="form-control" id="nameemp" name="nameemp" placeholder="Nombre" required="">
    				</div>
    				<div class="form-group col-md-6">
      					<label for="apellemp">Apellidos</label>
      					<input type="text" class="form-control" id="apellemp" name="apellemp" placeholder="Apellidos" required="">
    				</div>
            <div class="form-group col-md-6">
                <label for="Fechemp">Fecha de nacimiento</label>
                <input type="text" class="form-control" id="Fechemp" name="Fechemp" placeholder="dd/mm/aaaa" required="">  
            </div>
    				<div class="form-group col-md-6">
      					<label for="Telemp">Telefono</label>
      					<input type="text" class="form-control" id="Telemp" name="Telemp" placeholder="Telefono" required="">
    				</div>
            <div class="form-group col-md-6">
                <label for="DirEmp">Dirección</label>
                <input type="text" class="form-control" id="DirEmp" name="DirEmp" placeholder="Dirección" required="">  
            </div>
    				<div class="form-group col-md-6">
      					<label for="nicke">Nick</label>
      					<input type="text" class="form-control" id="nicke" name="nicke" placeholder="Nick del empleado" required="">
    				</div>
    				<div class="form-group col-md-6">
      					<label for="passemp">Password</label>
      					<input type="password" class="form-control" id="passemp" name="passemp" placeholder="Password" required="">
    				</div>
  				</div>
  				<div class="form-group">
  				</div>
  				<button type="" class="btn btn-primary"><a href="empleados.php" style="color: white">Cancelar</a></button>
  				<button type="submit" class="btn btn-primary">Agregar empleado</button>
			</form>
  			</div>
		</div>
	</div>
</body>
</html>