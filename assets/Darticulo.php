<?php

/*var_dump(editar);
die();*/
if (isset($_POST)) {

	//Conexion a la base de datos
	require_once 'conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($BD, $_POST['titulo']) : false;

	$categoria = ($_POST['categoria']);

	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($BD, $_POST['descripcion']) : false;

	$cantidad = isset($_POST['cantidad']) ? (int) $_POST['cantidad'] : false;

	$precio = isset($_POST['precio']) ? (int) $_POST['precio'] : false;

//validacion

	//Array de errores
	$errores = array();
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo titulo
	if (!empty($titulo) && !is_numeric($titulo) && !preg_match("/[0-9]/", $titulo)) {
		$titulo_validado = true;
	} else {
		$titulo_validado = false;
		$errores['titulo'] = "El titulo no es válido";
	}

	if (!empty($descripcion)) {
		$descripcion_validado = true;
	} else {
		$descripcion_validado = false;
		$errores['descripcion'] = "la descripcion no es válido";
	}

	if (is_numeric($cantidad)) {
		$cantidad_validado = true;
	} else {
		$descripcion_validado = false;
		$errores['cantidad'] = "la cantidad no es válido";
	}

	if (is_numeric($precio)) {
		$precio_validado = true;
	} else {
		$precio_validado = false;
		$errores['precio'] = "el precio no es válido";
	}

	$guardar_articulo = false;

	if (count($errores) == 0) {
		$guardar_articulo = true;
		$entrada_id = $_GET['editar'];

		if (isset($_GET['editar'])) {
			$sql = "UPDATE articulos SET titulo ='$titulo', categoria = '$categoria', descripcion = '$descripcion',  cantidad = $cantidad, precio = $precio " .
				" WHERE id = $entrada_id ";

		} else {
			$sql = "INSERT INTO articulos VALUES(null,'$titulo', '$categoria','$descripcion', CURDATE(), $cantidad, $precio);";

		}

		$guardar = mysqli_query($BD, $sql);

		if ($guardar) {
			$_SESSION['articulos_success'] = "El articulo se ha completado con éxito";
		}

	} else {
		$_SESSION['errores-articulos'] = $errores;
		if (isset($_GET['editar'])) {
			header("Location: ../index.php");
		} else {

			header("Location: ../agregar-articulo.php");
		}

	}

}

if (isset($_GET['editar'])) {
	header("Location: ../index.php");
} else {

	header("Location: ../agregar-articulo.php");
}

?>