<?php
  require 'nav.html';
?>

<!DOCTYPE html>
<html>
<head>
  <title>AQUAYOCAN | Nueva factura</title>
</head>
<body><br>
  <div align="center">
    <div class="card text-left" align="" style="width: 70%" >
      <div class="card-header"> <!--Cabecera de la car -->
          <h5>Nueva factura</h5>  
        </div>
        <div class="card-body">
          <form">
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCli">Cliente</label>
                <input type="text" class="form-control" id="inputCli" placeholder="Sellecione cliente">
            </div>
            <div class="form-group col-md-4">
                <label for="inputVend">Vendedor</label>
                <select id="inputVend" class="form-control">
                  <option selected>Administrador</option>
                  <option>Empleado</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTel">Telefono</label>
                <input type="text" class="form-control" id="inputTel" placeholder="Telefono">
            </div>
            <div class="form-group col-md-6">
                <label for="inputFec">Fecha</label>
                <input type="text" class="form-control" id="inputFec" placeholder="dd/mm/aaaa">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4f">Email</label>
                <input type="email" class="form-control" id="inputEmail4f" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputpag">Tipo de pago</label>
                <select id="inputpag" class="form-control">
                  <option selected>Efectivo</option>
                  <option>Cheque</option>
                  <option>Transferencia bancaria</option>
                  <option>Credito</option>
                </select>
            </div>

          </div>
          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-primary"><a href="factura.php" style="color: white">Cancelar</a></button>
          <button type="submit" class="btn btn-primary">Guardar factura</button>
      </form>
        </div>
      
    </div>
  </div>
</body>
</html>