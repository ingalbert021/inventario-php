

<?php include_once 'includes/cabecera.php';?>
<?php include_once 'assets/redirrecion/redirrecion.php';?>
<?php require_once 'assets/helpers/helpers.php';?>


<?php
$articulo = conseguirarticulo($BD, $_GET['id']);
?>

<!--Menu-->
    <nav class="h-14 navbar pt-8 navbar-expand-lg navbar-light bg-light">
             <!--LOGO-->
        <div id="logo">
            <a href="index.php">
Edicion de <?=$articulo['titulo']?>
</a>
        </div>


    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn ml-4 bg-primary text-white" href="index.php">Retroceder</a>
      </li>

    </ul>
    </nav>

<!--Menu--->
<div class="container  col-12">
                <div class="row justify-content-center">

                  <div class="col-6 border bg border-dark rounded mt-2 text-center">

    <form action="assets/Darticulo.php?editar=<?=$articulo['id']?>" class="formulario" method="POST">

  <div class="form-group">

  <p>Edita el articulo: <?=$articulo['titulo']?></p>
  <hr>
  <?php if (isset($_SESSION['articulos_success'])): ?>

   <div class="alerta alert-success">
   <?=$_SESSION['articulos_success']?>
   </div>
   <a href="tuberias.php" class="btn btn-primary" >IR a los articulos</a>
   <?php elseif (isset($_SESSION['errores-articulos'])): ?>
   <div class="alerta alert-danger">
 <p>algo ha salido mal!! intente llenar los datos correctamente</p>
   </div>
   <?php endif;?>
<br>
    <label for="titulo">Titulo:</label>

    <input type="text" name="titulo" class="form-control p-2 col-10 ml-5 text-center" value="<?=$articulo['titulo']?>" />


  <div class=" offset-4 form-group text-center col-md-4">
      <label for="inputState">Seleccione su categoria:</label>
      <select name="categoria" id="inputState" class="form-control">
     <option value="cementos">Cementos</option>
  <option value="tornillos" selected>Tornillos</option>
  <option value="tuberias">Tuberias</option>
  <option value="martillos">Martillos</option>
  <option value="pinturas">Pinturas</option>
      </select>
    </div>



 <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion:</label>
    <br>
    <textarea  name="descripcion"  maxlength="200" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Introduzca solo letras!"
     required="agrege la descripcion"><?=$articulo['descripcion']?></textarea>
</div>


        <label for="cantidad">Cantidad:</label>

    <input type="number" name="cantidad" class="form-control" value="<?=$articulo['cantidad']?>" placeholder="rellene"required>




    <label for="precio">Precio:</label>
    <br>
    <input type="number" name="precio" class="form-control" value="<?=$articulo['precio']?>" placeholder="rellene" required>

    <br>
    <input type="submit" class= "btn btn-primary"  value="actualizar">

    </div>
    </form>

              </div>
          </div>
    </div>
    <?php borrarErroresArticulos();?>


    </section>
<?php include_once 'includes/pie.php'?>

