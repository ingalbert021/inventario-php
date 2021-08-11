<?php include_once 'includes/cabecera.php';?>
<?php include_once './assets/redirrecion/redirrecion.php'?>
<?php include_once 'assets/helpers/helpers.php'?>

<body>

<!--Menu-->
    <nav class="h-14 navbar pt-8 navbar-expand-lg navbar-light bg-light">

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


    <form action="assets/Darticulo.php" class="formulario" method="POST">
      <div class="form-group">
  <h1>agregar tu articulo</h1>
  <hr>
  <?php if (isset($_SESSION['articulos_success'])): ?>
   <div class="alert alert-success">
   <?=$_SESSION['articulos_success']?>
   </div>
   <a href="index.php" class="btn btn-primary">IR a los articulos</a>
   <?php elseif (isset($_SESSION['errores-articulos'])): ?>
   <div class="alert alert-danger">
 <p>algo ha salido mal!! intente llenar los datos correctamente</p>
   </div>
   <?php endif;?>
<br>
    <label for="articulo">Articulo:</label>

    <input type="text" name="titulo" class="form-control p-2 col-10 ml-5 text-center" placeholder="Introduzca el nombre del articulo"/>


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
    <textarea name="descripcion"  maxlength="200" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Introduzca solo letras!" required>solo letras </textarea>
  </div>


    <label for="cantidad">Cantidad:</label>

    <input type="number" name="cantidad" class="form-control" placeholder="Introduzca la cantidad" required/>



    <label for="precio">Precio:</label>

    <input type="number" name="precio" class="form-control"  placeholder="Introduzca el precio" required/>

<br>
    <input type="submit" class= "btn btn-primary"  value="Enviar">
    </div>


    </form>

  </div>
</div>

</div>

    <?php borrarErroresArticulos();?>


    <div id="contenedor">
</div>

<?php include_once 'includes/pie.php'?>

