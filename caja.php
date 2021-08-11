<?php include_once 'assets/conexion.php';?>
<?php include_once 'assets/redirrecion/redirrecion.php';?>
<?php include_once 'assets/helpers/helpers.php';?>

<?php
if (isset($_POST['agregar'])) {
	if (isset($_SESSION['add_carro'])) {
		$item_array_id_cart = array_column($_SESSION['add_carro'], 'item_id');
		if (!in_array($_GET['id'], $item_array_id_cart)) {

			$count = count($_SESSION['add_carro']);
			$item_array = array(
				'item_id' => $_GET['id'],
				'item_nombre' => $_POST['hidden_nombre'],
				'item_precio' => $_POST['hidden_precio'],
				'item_cantidad' => $_POST['cantidad'],
			);

			$_SESSION['add_carro'][$count] = $item_array;
		} else {
			echo '<script>alert("El Producto ya existe!");</script>';
		}
	} else {
		$item_array = array(
			'item_id' => $_GET['id'],
			'item_nombre' => $_POST['hidden_nombre'],
			'item_precio' => $_POST['hidden_precio'],
			'item_cantidad' => $_POST['cantidad'],
		);

		$_SESSION['add_carro'][0] = $item_array;
	}
}
if (isset($_GET['action'])) {
	if ($_GET['action'] == 'delete') {
		foreach ($_SESSION['add_carro'] AS $key => $value) {
			if ($value['item_id'] == $_GET['id']) {
				unset($_SESSION['add_carro'][$key]);
				echo '<script>alert("El Producto Fue Eliminado!");</script>';
				echo '<script>window.location="caja.php";</script>';
			}

		}

	}

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

        <!--jquery.js-->
    <script src="./assets/bootstrap-4.5.2-dist/jquery.js"></script>

  <!--bootstrap.css desde el archivo-->
    <link rel="stylesheet" href="./assets/bootstrap-4.5.2-dist/css/bootstrap.min.css">
      <!--bootstrap.js desde el archivo-->
    <link rel="stylesheet" href="./assets/bootstrap-4.5.2-dist/js/bootstrap.min.js">

<!--popper via link directo-->
<script src="https://unpkg.com/@popperjs/core@2"></script>


    <link rel="stylesheet" href="./assets/style/style.css" type="text/css">
</head>
<body id="cuerpo">
    <!--cabecera-->
    <header id ="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
 Venta
</a>
        </div>

        <nav class="menu-detalle">
            <ul>
         <li>
             <a href="index.php">Inicio</a>
        </li>
        </ul>





</nav>
</header>
<!--contenido-->
<div class="container">

<div class="clearfix"></div>
<a href="assets/generar_pdf/registros.php?cemento" target="_blank" class="button btn-detalle">imprimir detalles</A>
<div class="clearfix"></div>
        <hr>

<div class="row">



    <?php if (empty(ConseguirArticulos($BD))): ?>
<h2>no hay registros !!</h2>
<?php else: ?>





    <?php ($articulos = ConseguirArticulos($BD));?>
<?php while ($articulo = mysqli_fetch_assoc($articulos)) {?>

   <div class="col-md-3">
        <form method="post" action="caja.php?action=add&id=<?php echo $articulo['id']; ?>">

            <div class="carro" align="center">
                <img src="./assets/style/img/cemento.jpg" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $articulo['titulo']; ?></h4>
                <h4 class="text-danger">$<?php echo $articulo['precio']; ?></h4>
                <input type="text" name="cantidad" class="form-control" value="1" />
                <input type="hidden" name="hidden_nombre" value="<?php echo $articulo['titulo']; ?>" />
                <input type="hidden" name="hidden_precio" value="<?php echo $articulo['precio']; ?>" />
                <input type="submit" name="agregar" style="margin-top:5px;" class="btn btn-success" value="Agregar" />
            </div>
        </form>
    </div>




<?php }?>
<?php endif?>
</div>







<!--detalles-->
 <h3 class="table__title">Detalle de la Orden</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Nombre</th>
                <th width="10%">Cantidad</th>
                <th width="20%">Precio</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
             <?php
if (!empty($_SESSION["add_carro"])) {
	$total = 0;
	foreach ($_SESSION["add_carro"] as $keys => $values) {
		?>
                    <tr>
                        <td><?php echo $values["item_nombre"]; ?></td>
                        <td><?php echo $values["item_precio"]; ?></td>
                        <td>$ <?php echo $values["item_cantidad"]; ?></td>
                        <td>$ <?php echo number_format($values["item_cantidad"] * $values["item_precio"], 2); ?></td>
                        <td><a href="caja.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                        </tr>
                    <?php
$total = $total + ($values["item_cantidad"] * $values["item_precio"]);
	}
	?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
} else {
	?>


              <tr>
                    <td colspan="4" style="color: red" align="center"><strong>No hay Producto Agregado!</strong></td>
                </tr>
                <?php
}
?>

        </table>
    </div>




</div>

<div id="contenedor">
</div>
<!-- Footer -->
<footer class="pie">

  <!-- Copyright -->
  <div>© 2020 Copyright:
    <a href="https://www.instagram.com/alberto21_02/?hl=es"> Alberto de la cruz </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    </body>
</html>