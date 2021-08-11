<?php

require_once 'conexion.php';

if (isset($_GET['id'])) {

	$entrada_id = $_GET['id'];

	$sql = "DELETE FROM articulos  WHERE id = $entrada_id";

	$borrar = mysqli_query($BD, $sql);
}
header("Location: ../index.php");
