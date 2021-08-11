 <!---sweetalert--->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php

$basededatos = 'inventario';
$usuario = 'root';
$servidor = 'localhost';
$password = '';

$BD = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($BD, "SET NAMES 'utf8'");

//Iniciar session
if (!isset($_SESSION)) {
	session_start();
}

?>