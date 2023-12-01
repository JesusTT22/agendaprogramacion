<?php
$usuario  = "root";
$password = "root";
$servidor = "localhost";
$basededatos = "agenda";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
?>

