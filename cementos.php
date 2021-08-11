<?php include_once 'assets/conexion.php';?>
<?php include_once 'assets/redirrecion/redirrecion.php';?>
<?php include_once 'assets/helpers/helpers.php';?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!--Tipografia-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style/style.css" type="text/css">


<!--jquery-->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>



</head>
<body id="cuerpo">
    <!--cabecera-->
    <header id ="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
 Tipos de cementos
</a>
        </div>

        <nav class="menu-detalle">
            <ul>
         <li>
             <a href="index.php">Inicio</a>
        </li>
        </ul>


        <ul>
         <li>
             <a href="agregar-articulo">Agregar articulo</a>
        </li>
        </ul>


</nav>
</header>
<!--contenido-->
<div class="principal">

<div class="clearfix"></div>
<a href="assets/generar_pdf/registros.php?cemento" target="_blank" class="button btn-detalle">imprimir detalles</A>
    <br>



<div class="clearfix"></div>


 <div class="detalle">
 <img src="assets/style/img/cemento.jpg">



        <hr>




    <?php if (empty(ConseguirArticulosCemento($BD))): ?>
<h2>no hay registros de articulos de los cementos</h2>
<?php else: ?>



        <div class="container-table">
    <div class="table__title">Datos de la  tabla</div>
    <div class="table__header">Titulo</div>
    <div class="table__header">Precio</div>
    <div class="table__header">Cantidad</div>
    <div class="table__header">Fecha De Introducion</div>

    <?php ($articulos = ConseguirArticulosCemento($BD));?>
<?php while ($articulo = mysqli_fetch_assoc($articulos)) {
	?>
    <div class="table__item"><?php echo $articulo['titulo'] ?></div>
    <div class="table__item">$<?php echo $articulo['precio'] ?></div>
    <div class="table__item"><?php echo $articulo['cantidad'] ?></div>
    <div class="table__item"><?php echo $articulo['fecha'] ?>

        <a href="assets/borrar.php?id=<?=$articulo['id']?>"onclick="return confirm('estas seguro que quieres borrar el articulo?')"  class="btn-edit borrar">Borrar</a>


        <a href="edicion-articulo.php?id=<?=$articulo['id']?>" class="btn-edit editar">Editar</a></div>
<?php }?>
<?php endif?>
    </div>


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