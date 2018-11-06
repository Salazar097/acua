<?php
  require 'nav.html';
  require 'conecta.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <title>AQUAYOCAN | EMPLEADOS</title>
</head>

<body><br>
    
<!-- card se puede reciclar desde aqui-->
<div align="center">                        <!--tamaño de la card -->
    <div class="card text-left" align="" style="width: 70%" >
        <div class="card-header"> <!--Cabecera de la car -->
            <h5>Empleados</h5>  
        </div>

        <div class="card-body"> <!--cuerpo de la card -->
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">Empleados</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre" style="width: 70px">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Empl</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Nombre del empleado" style="width: 400px">
                </div>
                <button type="button" class="btn btn-outline-primary">Buscar Empleado</button>
                <button type="button" class="btn btn-outline-primary"><a href="agregar-empleado.php">Nuevo empleado</a></button>
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
              <th scope="col">Fecha de nacimiento</th>
              <th scope="col">Telefono</th>
              <th scope="col">Dirección</th>
              <th scope="col">Nick</th>
            </tr>
          </thead>

          <?php
            $sql="SELECT * FROM empleado";
            $result=mysqli_query($conn, $sql);

            while ($mostrar=mysqli_fetch_array($result)) {
          ?>

        <tbody>
          <tr>
              <td><?php echo $mostrar['idEmpleado'] ?></td>
              <td><?php echo $mostrar['NombreE'] ?></td>
              <td><?php echo $mostrar['ApellidoE'] ?></td>
              <td><?php echo $mostrar['FechaNac'] ?></td>
              <td><?php echo $mostrar['Telefono'] ?></td>
              <td><?php echo $mostrar['Direccion'] ?></td>
              <td><?php echo $mostrar['Nick'] ?></td>
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