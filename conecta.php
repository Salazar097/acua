<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $bd)
	or die("Error en la conexion"); 
?>