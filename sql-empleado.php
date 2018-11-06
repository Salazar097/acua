<?php
require 'conecta.php';
require 'agregar-empleado.php';


error_reporting(E_ALL);
ini_set('display_errors', '1');

$nameemp = $_POST["nameemp"];
$apellemp = $_POST["apellemp"];
$Fechemp = $_POST["Fechemp"];
$Telemp = $_POST["Telemp"];
$DirEmp = $_POST["DirEmp"];
$nicke = $_POST["nicke"];
$passemp = $_POST["passemp"];

$insertar = "INSERT INTO empleado (NombreE, ApellidoE, FechaNac, Telefono, Direccion, Nick, Password) 
	VALUES ('$nameemp', '$apellemp', '$Fechemp', '$Telemp', '$DirEmp', '$nicke', '$passemp')";

$resultado = mysqli_query($conn, $insertar);
	
mysqli_close($conn);
?>