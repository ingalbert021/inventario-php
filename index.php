
<?php include_once 'includes/cabecera.php';?>
<?php include_once './assets/redirrecion/redirrecion.php'?>


<body>

<!--Menu-->
    <nav class="h-14 navbar pt-8 navbar-expand-lg navbar-light bg-white">
<!--Logo-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <img src="assets/style/img/logo.jpg" width="40" height="40" alt="logo">
      <li class="nav-item active">
        <a class="nav-link btn ml-4 bg-primary text-white" href="index.php">Inicio</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link btn ml-4 bg-primary text-white"  href="editar.php">Datos personales</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link btn ml-4 bg-primary text-white" href="cerrar.php">Cerrar usuario</a>
      </li>

        <li class="nav-item active">
        <a class="nav-link btn ml-4 bg-primary text-white" href="caja.php">Caja</a>
        </li>


    </ul>
    <!---Buscador--->
   <form class=" form-inline my-2 my-lg-0 float-right" id="buscar" action="buscar.php" method="POST">
      <input class="form-control mr-sm-2" name="busqueda"  type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-primary  my-2 my-sm-0" type="submit">Buscador</button>
    </form>
  </div>
</nav>
<img class="whats position-fixed float-left" target="_blank" href="https://wa.link/gb6xju" src="assets/style/img/whatsapp.png" width="60" height="60" alt="whatsapp">

<a title="whatsapp" href="https://wa.link/gb6xju" target="_blank"><img class="whats position-fixed float-left" src="assets/style/img/whatsapp.png" width="60" height="60" alt="whatsapp"/></a>

<div class="container">
    <div class="row mb-8">
<div class="col-9 bg-white  mb-8 mt-4 shadow-lg rounded">

<?php if (isset($_SESSION['usuario'])): ?>
		<div  class="nombre">
             <?=$_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'];?></h3>
</div>
<?php endif;?>
<!--Principal--->
  <div class="container">
    <div class="row">

    <div class="col-2">
      <div class="product">
 <img src="assets/style/img/martillo.jpg" class=" mt-1">
        <h2><strong>Martillos</strong></h2>
        <a href="martillos.php" class="btn btn-info">ENTRAR</A>
      </div>
    </div>

<div class="col-2">
      <div class="product">
 <img src="assets/style/img/pintura.jpg" class=" mt-1">
        <h2><strong>Pinturas</strong></h2>
        <a href="pinturas.php" class="btn btn-info">ENTRAR</A>
    </div>
  </div>

<div class="col-2">
      <div class="product">
 <img src="assets/style/img/tornillos.jpg" class=" mt-1">
        <h2><strong>Tornillos</strong></h2>
        <a href="tornillos.php" class="btn btn-info">ENTRAR</A>
    </div>
</div>


<div class="col-2">
      <div class="product">
 <img src="assets/style/img/tuberia.jpg" class=" mt-1">
        <h2><strong>Tuberias</strong></h2>
        <a href="tuberias.php" class="btn btn-info">ENTRAR</A>
    </div>
</div>

<div class="col-2">
      <div class="product">
 <img src="assets/style/img/cemento.jpg" class=" mt-1">
        <h2><strong>cementos</strong></h2>
        <a href="cementos.php" class="btn btn-info">ENTRAR</A>
    </div>
</div>


</div>
</div>
</div>


    <div class="col-3  mb-8 mt-4 ">

<br>
<h2>Direccion:</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d281.19660223376917!2d-70.04704972835846!3d18.514642370550042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sdo!4v1588119747961!5m2!1ses-419!2sdo" width="198" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <br>

</div>
</div>
</div>
<div id="contenedor">
</div>
<?php include_once 'includes/pie.php'?>