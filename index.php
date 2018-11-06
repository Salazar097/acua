<?php
  require 'template.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AQUAYOCAN</title>
	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="imagen/Logo_aguayocan.png" alt="IMG">
					<h1 align="center">Aquayocan</h1> 
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Iniciar sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Se necesita correo válido">
						<input class="input100" type="text" name="Usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se necesita contraseña">
						<input class="input100" type="password" name="Contraseña" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="Principal.php">
							Iniciar Sesión
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							¿Olvidaste tu contraseña?
						</span>
						<a class="txt2" href="#">
							<br>Usuario / Contraseña
						</a>
					<div class="text-center p-t-12">	
						<span class="txt1">
							¿No tienes una cuenta?
						</span>	
					</div>	
						<a class="txt2" href="RegistroI.php">
							 Registrate!
						</a>
					</div>
					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>