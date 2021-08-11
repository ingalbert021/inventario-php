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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body id="cuerpo">
    <!--cabecera-->
    <header id ="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
 Tipos de Tornillos
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
<a href="assets/generar_pdf/registros.php?tornillos" target="_blank" class="button btn-detalle">imprimir detalles</A>
<div class="clearfix"></div>


 <div class="detalle">
 <img src="assets/style/img/tornillos.jpg">



        <hr>



    <div class="container-table">
<div class="table__title">Datos de la  tabla</div>
    <div class="table__header">Titulo</div>
    <div class="table__header">Precio</div>
    <div class="table__header">Cantidad</div>
    <div class="table__header">Fecha De Introducion</div>

    <?php if (empty(ConseguirArticulosTornillos($BD))): ?>
<h2>no hay registros de articulos de las Tornillos</h2>
<?php else: ?>
    <?php ($articulos = ConseguirArticulosTornillos($BD));?>
<?php while ($articulo = mysqli_fetch_assoc($articulos)) {?>
    <div class="table__item"><?php echo $articulo['titulo'] ?></div>
    <div class="table__item"><?php echo $articulo['precio'] ?>$</div>
    <div class="table__item"><?php echo $articulo['cantidad'] ?></div>
    <div class="table__item"><?php echo $articulo['fecha'] ?><a href="assets/borrar.php?id=<?=$articulo['id']?>"onclick="return confirm('estas seguro que quieres borrar el articulo?')"  class="btn-edit borrar">Borrar</a> <a href="edicion-articulo.php?id=<?=$articulo['id']?>" class="btn-edit editar">Editar</a></div>
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