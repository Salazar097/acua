<?php
require 'conecta.php';
require 'agregar-cliente.php';


error_reporting(E_ALL);
ini_set('display_errors', '1');

$namecli = $_POST["namecli"];
$Apellcli = $_POST["Apellcli"];
$direcli = $_POST["direcli"];
$Telcli = $_POST["Telcli"];
$Emailcli = $_POST["Emailcli"];

$insertar = "INSERT INTO cliente (NombreC, ApellidoCliente, DireccionCliente, Telefono, Email) 
	VALUES ('$namecli', '$Apellcli', '$direcli', '$Telcli', '$Emailcli')";

$resultado = mysqli_query($conn, $insertar);
	
mysqli_close($conn);
?>