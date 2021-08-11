<?php include_once 'includes/cabecera.php';?>
<?php include_once 'assets/redirrecion/redirrecion.php';?>
<?php require_once 'assets/helpers/helpers.php';?>

<body>

   

            <div class="container  col-12">
                <div class="row justify-content-center">
               
                  <div class="col-6 border bg border-dark rounded mt-5 text-center">

    <form action="assets/Deditar.php" class="formulario" method="POST">
       <div class="form-group">
  <h1>Editar</h1>
            <div class="ml-4">
             <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
            
	           </div>
  <?php ?>
  <?php if(isset($_SESSION['completado'])) : ?>
  <div class="alert alert-success">
  <?= $_SESSION['completado']?>
  </div>
  <?php elseif(isset($_SESSION['errores']['general'])): ?>
   <div class="alert alert-danger">
   <?= $_SESSION['errores']['general']?>
   </div>
   <?php endif; ?>
    <label for="nombre" class="mt-2">Nombre:</label>
    <br>
    <input type="text" name="nombre" class="form-control p-2 col-10 ml-5 text-center" value="<?=$_SESSION['usuario']  ['nombre']; ?>"/>
    

    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'nombre') :'';?>

    
    <br>
    <label for="apellidos">Apellidos:</label>
    <br>
    <input type="text" name="apellidos" class="form-control p-2 col-10 ml-5 text-center"  value="<?=$_SESSION['usuario']  ['apellidos']; ?>"/>

    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'apellido') :'';?>

    <br>
    
    <label for="email">Email:</label>
    <br>
    <input type="text" name="email" class="form-control p-2 col-10 ml-5 text-center"aria-describedby="emailHelp"  value="<?=$_SESSION['usuario']  ['email']; ?>"/>
    
    <?php echo isset($_SESSION['errores']) ? mostrarerror($_SESSION['errores'], 'email') :'';?>

    <br>

    
    <input type="submit" class= "btn btn-primary"  value="actualizar">
     <a href="index.php" class="btn btn-info">volver atras</a>
    </div>
    </form>
    <?php borrarErrores(); ?> 
   
        </div>
  </div>
</div>

<?php include_once 'includes/pie.php'?>

