
<?php include_once './includes/cabecera.php'?>
<?php require_once 'assets/helpers/helpers.php';?>

<body>

<!--Menu-->
    <nav class="h-10 navbar text-center pt-8 navbar-expand-lg navbar-light bg-white">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--Logo-->
      <img src="assets/style/img/logo.jpg" width="40" height="40" alt="logo">

    <div id="logo">
    <a href ="index.php">
    Ferreteria Echavarria
    </a>
    </div>
  </div>
</nav>

            <div class="container  col-12">
                <div class="row justify-content-center">

                  <div class="col-6 border bg border-dark rounded mt-5 text-center">
                <!--<section id="sidebar">-->
    <form action="assets/Dlogin.php" class="formulario" method="POST">
      <div class="form-group">

  <?php if (isset($_SESSION['usuario'])): ?>
                    <!--aqui acedimos a la sesion usuario y despues a el array nombre y apellidos-->
<h3>Bienvenido</h3>,<h4> <?=$_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'];?></h4>
   <!--botones-->
      <a href="index.php" class="btn btn-primary">Ir a el inventario</a>
      <a href="cerrar.php" class="btn text-white btn-warning">salir del usuario</a>



<?php endif;?>

<?php if (!isset($_SESSION['usuario'])): ?>
<span class="fi-ban">   </span>
    <div id="login" class="bloque">

      <h3>identificate</h3>
      <?php if (isset($_SESSION['error_login'])): ?>
            <div class="alert alert-danger">
        <?=$_SESSION['error_login'];?>
 </div>

<?php endif;?>


    <label for="exampleInputEmail1">Correo electronico:</label>
    <br>
    <input type="email" name="email" class="form-control p-2 col-10 ml-5 text-center  " placeholder="Introduzca su correo electronico"  aria-describedby="emailHelp" placeholder="Enter email">
    <br>
    <label for="contraseña">Contraseña:</label>
    <br>
    <input type="password" name="password" class="form-control p-2 col-10 ml-5 text-center " placeholder="Introduzca su contraseña">
    <div class="clearfix"></div>
     <input type="submit" class="btn btn-primary mt-3"  value="Enviar">
     <div class="clearfix"></div>
    <br>

     </div>

    <h4>no estas registrado? hazlo aqui <a  class="btn btn-info " href="registro.php">click</a></h4>

    </div>
</div>
    </form>





    <!--</section>-->
    </div>
  </div>
</div>

    <?php include_once 'includes/pie.php';?>
    <?php endif;?>