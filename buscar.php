
<?php include_once 'includes/cabecera.php';?>
<?php include_once './assets/redirrecion/redirrecion.php'?>
<?php include_once './assets/conexion.php'?>
<?php include_once './assets/helpers/helpers.php';?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--LOGO-->
 <div id="logo">
    <a href ="index.php">
    Ferreteria Echavarria
    </a>
    </div>


  <a class="ml-4 navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand ml-4" href="editar.php">Editar Datos personales</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <a class="navbar-brand ml-4" href="cerrar.php.php">Cerrar Usuario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>


<?php if (!isset($_POST['busqueda'])) {
	header('location:index.php');
}

?>
<body id="cuerpo">





 <div class="container  col-12">
                <div class="row justify-content-center">

                  <div class="col-6 border bg border-dark rounded mt-5 text-center">

<div class="principal busqueda">
<!--contenido-->
<!---buscador-->
<div class="col-12">
    <div class="row float-left mt-5 mb-5">

<form id="buscar" action="buscar.php"  method="POST">

    <div class="form-group">

<input type="text"  name="busqueda" class=" form-control p-2 col-8 float-left" placeholder="Buscar">

<input type="submit" class= "btn btn-info float-right" value="Entrar" />
</div>
</div>
</form>
</div>
<div class="clearfix"></div>
<?php

?>
<?php if (empty($_POST['busqueda'])): ?>
    <div class="alert alert-danger">
    <h2>no hay registros del articulo buscado!!</h2>
   </div>
<?php else: ?>

    <?php ($busqueda = busquedaEntrada($BD, $_POST['busqueda']));

if (!empty($busqueda) && mysqli_num_rows($busqueda) >= 1):

	while ($buscado = mysqli_fetch_assoc($busqueda)):
	?>




				     <h2 class="mb-0"><strong><?=$buscado['titulo']?></strong></h2>


				<div class="datos">
				        <H3>Precio de unidad: <strong><?=$buscado['precio']?>$</strong></H3>
				            <h3>Cantidad existente: <strong><?=$buscado['cantidad']?></strong></h3>
				        <h3>Fecha introducido: <strong><?=$buscado['fecha']?></h3></strong>
				            <p>
				           <?=$buscado['descripcion']?>
				            </p>


				        </div>
				        <?php endwhile;?>
        <?php endif;?>
<?php endif;?>
</div>

<div id="contenedor">
</div>
</div>
</div>
</div>


  </body>
</html>
