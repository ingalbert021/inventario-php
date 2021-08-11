
<?php include_once 'includes/cabecera.php'?>
<?php include_once 'assets/helpers/helpers.php'?>

<body>

  <div class="container  col-12">
                <div class="row justify-content-center">

                  <div class="col-6 border bg border-dark rounded mt-5 text-center">

<form action="assets/Dregistro.php" class="formulario" method="POST">
  <div class="form-group">
      <!--mostrar errores-->
   <?php if (isset($_SESSION['completado'])): ?>

   <div class="alert alert-success mt-5">
   <?=$_SESSION['completado']?>
   </div>
   <a href="index.php" class="btn btn-success" >IR a el inventario</a>
   <?php elseif (isset($_SESSION['errores']['general'])): ?>
   <div class="alerta alerta-error">
   <?=$_SESSION['errores']['general']?>
   </div>
   <?php endif;?>


   <h1>Introduzca sus Datos</h1>


    <label for="Nombre">Nombre:</label>
    <br>
    <input type="text" name="nombre" class="form-control p-2 col-10 ml-5 text-center" placeholder="Introduzca su nombre">
    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'nombre') : ''; ?>
    <br>
    <label for="Apellidos">Apellidos:</label>
    <br>
    <input type="text" name="apellidos" class="form-control p-2 col-10 ml-5 text-center" placeholder="Introduzca sus apellidos">
    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'apellidos') : ''; ?>
    <br>

    <label for="email">Correo electronico:</label>
    <br>
    <input type="email" name="email" class="form-control p-2 col-10 ml-5 text-center" placeholder="Introduzca su correo electronico">
    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'email') : ''; ?>
    <br>
    <label for="contraseña">Contraseña:</label>
    <br>
    <input type="password" name="password" class="form-control p-2 col-10 ml-5 text-center" placeholder="Introduzca su contraseña">
    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'password') : ''; ?>
    <br>
    <input type="submit" name="submit" class= "btn btn-primary"  value="Enviar">
    <h3>ya estas registrado registrado? si <a href="login.php" class="text-decoration-none"><h5>click</h5></a></h3>
       </div>
    </form>
    <?php borrarErrores();?>
</div>
   </div>
 </div>
  </div>
    <?php include_once 'includes/pie.php'?>