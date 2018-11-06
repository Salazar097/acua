<?php
  require 'nav.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AQUAYOCAN | Caja</title>
</head>
<body><br>

	<div align="center">						<!--tamaño de la card -->
	<div class="card text-left" align="" style="width: 70%" >
  		<div class="card-header"> <!--Cabecera de la car -->
  			<h5>Caja</h5>  
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
			</form>
    <div class="table-responsive-sm">
			<table class="table">
  				<thead>
    				<tr>
      					<th scope="col">Clave</th>
      					<th scope="col">Nombre</th>
      					<th scope="col">Precio</th>
      					<th scope="col">Cantidad</th>
      					<th scope="col">Importe</th>
    				</tr>
  				</thead>
  				<tbody>
    				<tr>
      					<th scope="row">1165</th>
      					<td>Agua</td>
      					<td>15</td>
      					<td>2</td>
      					<td>30</td>
    				</tr>
    				<tr>
      					<th scope="row">2895</th>
      					<td>botella</td>
      					<td>7</td>
      					<td>3</td>
      					<td>21</td>
    				</tr>
  				</tbody>
			</table>
    </div>
		</div>

  		<div class="card-footer">
        <table class="table">
          <thead>
            <tr>
              <th>
  			        <div class="form-group col-md-4">
                 <th><label for="inputpag">Tipo de pago</label>
                  <select id="inputpag" class="form-control">
                    <option selected>Efectivo</option>
                    <option>Cheque</option>
                    <option>Transferencia bancaria</option>
                    <option>Credito</option>
                  </select></th>
                    <th><button type="button" class="btn btn-outline-primary">Cobrar</button></th>
                </div>
              </th>
              <th>
                <div align="center">
  			         <table class="table table-sm" style="width:200px">
  				        <thead>
    				        <tr>
                      <th>Total</th>
      					      <th scope="col">51</th>
    				        </tr>
  				        </thead>
			           </table>
              </th>
            </tr>
          </thead>
        </table>
		</div>
  		</div>
	</div>
</div>
</body>
</html>