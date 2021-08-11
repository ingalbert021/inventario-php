<?php include_once '../../assets/conexion.php';?>
<?php include_once '../../assets/redirrecion/redirrecion.php';?>
<?php include_once '../../assets/helpers/helpers.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros</title>


</head>
<style>
#logo{
    float:left;
    width: 540px;
    height: 110px;
    margin: 0px auto;
}

#logo a{
  
    font-size: 28px;
    letter-spacing: 2px;
    color: #2979CD;
    text-shadow: 0px 0px 0px black, 1px 1px 0px black, 2px 2px 0px black;
    transition: all 500ms;
    line-height: 90px;
    margin-left: 10px;
}



#logo a:hover{
    cursor: pointer;
    text-shadow: 0px 0px 0px black, -1px -1px 0px black, -2px -2px 0px black;
}

#cabecera
{
    width:85%;
    margin-top: 5px;
    font-size:14px;
}
</style>
<style>
        
  
        
</style>

<body>




<div id="logo">
            <a href="index.php" width="30px">
 Ferreteria Echavarria Inventario
</a>
        </div>
        <?php if(isset($_GET['cemento'])):?>
<?php if(empty(ConseguirArticulosCemento($BD))):?>
<h2>no hay registros de articulos</h2>

<?php else:?>
<?php ($articulos = ConseguirArticulosCemento($BD)); ?>
   
<?php while($articulo = mysqli_fetch_assoc($articulos)):?>

   
<div class="bordes">
 <div class="detalle">
 
         <h2><strong><?=$articulo['titulo']?></strong></h2>       
       <div class="datos">
        <H3>Precio de unidad: <strong><?=$articulo['precio']?>$</strong></H3>
            <h3>Cantidad existente: <strong><?=$articulo['cantidad']?></strong></h3>
        <h3>Fecha introducido: <?=$articulo['fecha']?></h3>
            <p>
           <?=$articulo['descripcion']?>
            </p>
            <div class="clearfix"></div>
        <hr>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif;?>
<?php endif;?>

<?php if(isset($_GET['pintura'])):?>
<?php if(empty(ConseguirArticulosPintura($BD))):?>
<h2>no hay registros de articulos</h2>

<?php else:?>
<?php ($articulos = ConseguirArticulosPintura($BD)); ?>
   
<?php while($articulo = mysqli_fetch_assoc($articulos)):?>

   
<div class="bordes">
 <div class="detalle">
 
         <h2><strong><?=$articulo['titulo']?></strong></h2>       
       <div class="datos">
        <H3>Precio de unidad: <strong><?=$articulo['precio']?>$</strong></H3>
            <h3>Cantidad existente: <strong><?=$articulo['cantidad']?></strong></h3>
        <h3>Fecha introducido: <?=$articulo['fecha']?></h3>
            <p>
           <?=$articulo['descripcion']?>
            </p>
            <div class="clearfix"></div>
        <hr>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif;?>
<?php endif;?>


<?php if(isset($_GET['tuberias'])):?>
<?php if(empty(ConseguirArticulosPintura($BD))):?>
<h2>no hay registros de articulos</h2>

<?php else:?>
<?php ($articulos = ConseguirArticulosPintura($BD)); ?>
   
<?php while($articulo = mysqli_fetch_assoc($articulos)):?>

   
<div class="bordes">
 <div class="detalle">
 
         <h2><strong><?=$articulo['titulo']?></strong></h2>       
       <div class="datos">
        <H3>Precio de unidad: <strong><?=$articulo['precio']?>$</strong></H3>
            <h3>Cantidad existente: <strong><?=$articulo['cantidad']?></strong></h3>
        <h3>Fecha introducido: <?=$articulo['fecha']?></h3>
            <p>
           <?=$articulo['descripcion']?>
            </p>
            <div class="clearfix"></div>
        <hr>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif;?>
<?php endif;?>


<?php if(isset($_GET['tornillos'])):?>
<?php if(empty(ConseguirArticulosTornillos($BD))):?>
<h2>no hay registros de articulos</h2>

<?php else:?>
<?php ($articulos = ConseguirArticulosTornillos($BD)); ?>
   
<?php while($articulo = mysqli_fetch_assoc($articulos)):?>

   
<div class="bordes">
 <div class="detalle">
 
         <h2><strong><?=$articulo['titulo']?></strong></h2>       
       <div class="datos">
        <H3>Precio de unidad: <strong><?=$articulo['precio']?>$</strong></H3>
            <h3>Cantidad existente: <strong><?=$articulo['cantidad']?></strong></h3>
        <h3>Fecha introducido: <?=$articulo['fecha']?></h3>
            <p>
           <?=$articulo['descripcion']?>
            </p>
            <div class="clearfix"></div>
        <hr>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif;?>
<?php endif;?>


<?php if(isset($_GET['martillo'])):?>
<?php if(empty(ConseguirArticulosmartillos($BD))):?>
<h2>no hay registros de articulos</h2>

<?php else:?>
<?php ($articulos = ConseguirArticulosmartillos($BD)); ?>
   
<?php while($articulo = mysqli_fetch_assoc($articulos)):?>

   
<div class="bordes">
 <div class="detalle">
 
         <h2><strong><?=$articulo['titulo']?></strong></h2>       
       <div class="datos">
        <H3>Precio de unidad: <strong><?=$articulo['precio']?>$</strong></H3>
            <h3>Cantidad existente: <strong><?=$articulo['cantidad']?></strong></h3>
        <h3>Fecha introducido: <?=$articulo['fecha']?></h3>
            <p>
           <?=$articulo['descripcion']?>
            </p>
            <div class="clearfix"></div>
        <hr>
</div>
</div>
</div>

<?php endwhile; ?>
<?php endif;?>
<?php endif;?>



</body>
</html>