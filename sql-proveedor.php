<?php
require 'conecta.php';
require 'agregar-proveedor.php';


error_reporting(E_ALL);
ini_set('display_errors', '1');

$namepro = $_POST["namepro"];
$direpro = $_POST["direpro"];
$Telpro = $_POST["Telpro"];
$Emailpro = $_POST["Emailpro"];

$insertar = "INSERT INTO proveedor (NombreProveedor, DireccionProveedor, Telefono, EmailProv) 
	VALUES ('$namepro', '$direpro', '$Telpro', '$Emailpro')";

$resultado = mysqli_query($conn, $insertar);
	
mysqli_close($conn);
?>


