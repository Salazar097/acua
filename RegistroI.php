<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aquayocan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/Aquayocan.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
						Registro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Debe llenarse éste campo">
						<input class="input100" type="text" name="Nombre" placeholder="Nombre/s">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debe llenarse éste campo">
						<input class="input100" type="text" name="Apellidos" placeholder="Apellidos">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Debe llenarse éste campo">
						<input class="input100" type="text" name="Dir" placeholder="Dirección">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debe llenarse éste campo">
						<input class="input100" type="text" name="Tel" placeholder="Teléfono">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debe llenarse éste campo">
						<input class="input100" type="text" name="Correo" placeholder="Correo Electrónico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-inbox" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="Principal.php">
							Registrarse
						</button>
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

<?php
								$email_a = 'correo@ejemplo.com';
								$email_b = 'bogus';
								if (filter_var($email_a, FILTER_VALIDATE_EMAIL)){
									echo "Ésta dirección de correo es válida ($email_a) es válida";
								}
								if (filter_var($email_b, FILTER_VALIDATE_EMAIL)){
									echo "Ésta dirección ($email_b) es válida";
								}
							?>


</body>
</html>