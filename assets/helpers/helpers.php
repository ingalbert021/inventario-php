
<?php

function mostrarerror($errores, $campo) {
	$alerta = '';
	if (isset($errores[$campo]) && !empty($campo)) {
		$alerta = "<div class= 'alert alert-danger'>" . $errores[$campo] . '</div>';

	}
	return $alerta;
}
function borrarErrores() {
	$borrado = false;

	if (isset($_SESSION['errores'])) {
		$_SESSION['errores'] = null;
		$borrado = true;
	}

	if (isset($_SESSION['errores_entrada'])) {
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}

	if (isset($_SESSION['completado'])) {
		$_SESSION['completado'] = null;
		$borrado = true;
	}

	return $borrado;
}

//funcion de errores de articulos
function borrarErroresArticulos() {
	$borrado = false;

	if (isset($_SESSION['errores'])) {
		$_SESSION['errores'] = null;
		$borrado = true;
	}

	if (isset($_SESSION['errores-articulos'])) {
		$_SESSION['errores-articulos'] = null;
		$borrado = true;
	}

	if (isset($_SESSION['articulos_success'])) {
		$_SESSION['articulos_success'] = null;
		$borrado = true;
	}

	return $borrado;
}

//CONSEGUIR TODOS LOS ARTICULOS
function ConseguirArticulos($conexion) {
	$sql = "SELECT * FROM articulos  ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}

//CONSEGUIR LOS ARTICULOS DE CEMENTO
function ConseguirArticulosCemento($conexion) {
	$sql = "SELECT * FROM articulos WHERE categoria = 'cementos' ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}

//CONSEGUIR LOS ARTICULOS DE MARTILLOS
function ConseguirArticulosmartillos($conexion) {
	$sql = "SELECT * FROM articulos WHERE categoria = 'martillos' ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}

//CONSEGUIR LOS ARTICULOS DE PINTURA
function ConseguirArticulosPintura($conexion) {
	$sql = "SELECT * FROM articulos WHERE categoria = 'pinturas' ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}

//CONSEGUIR LOS ARTICULOS DE TUBERIAS
function ConseguirArticulosTuberias($conexion) {
	$sql = "SELECT * FROM articulos WHERE categoria = 'tuberias' ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}
//CONSEGUIR LOS ARTICULOS DE TORNILLOS
function ConseguirArticulosTornillos($conexion) {
	$sql = "SELECT * FROM articulos WHERE categoria = 'tornillos' ORDER BY ID DESC;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = $articulos;
	}

	return $result;
}

/*funcion para mostrar los datos de un articulo en especifico*/
function conseguirarticulo($conexion, $id) {
	$sql = "SELECT * FROM articulos WHERE $id = id;";
	$articulos = mysqli_query($conexion, $sql);

	$result = array();
	if ($articulos && mysqli_num_rows($articulos) >= 1) {
		$result = mysqli_fetch_assoc($articulos);
	}

	return $result;
}

//FUNCION PARA EL BUSCADOR
function busquedaEntrada($conexion, $busqueda) {

	$sql = "SELECT * FROM articulos WHERE titulo LIKE '%$busqueda%' ";
	$busqueda = mysqli_query($conexion, $sql);

	$result = array();

	return $busqueda;
}
