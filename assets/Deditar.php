<?php
if(isset($_POST))
{
    //conexion a la base de datos
    require_once 'conexion.php';

  



$nombre =  isset($_POST['nombre']) ? mysqli_real_escape_string($BD, $_POST['nombre']) : false;

$apellido = isset($_POST['apellidos']) ? mysqli_real_escape_string($BD, $_POST['apellidos']) : false;

$email = isset($_POST['email']) ? mysqli_real_escape_string($BD, trim($_POST['email'])) : false;



//array de errores
$errores = array();


//validar los datos antes de guardarlos en la base de datos 

//validar nombre
if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
{
  
   $nombre_validado = true;
}
else
{
   $nombre_validado = false;
   //una forma de pasarle un dato a un array es utilizando el [] segido del nombre del dato o variable  ejeemplo $errores['nombre']
   $errores['nombre'] = "El nombre no es valido";
}
 
//validar apellido
if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido))
{
  
   $apellidos_validado = true;
}
else
{
   $apellidos_validado = false;
   $errores['apellido'] = "El apellido no es valido";
}

//validar email
if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
{
  
   $email_validado = true;
}
else
{
   $email_validado = false;
   $errores['email'] = "El campo email no es valido";
}
$guardar_usuario = false;

if(count($errores) == 0)
{
   $usuario = $_SESSION['usuario'];
   $guardar_usuario = true;

   //COMPROBAR SI EL EMAIL SE REPITE
   $sql = "select id, email from usuarios where email = '$email'";
   $isset_email = mysqli_query($BD, $sql);
   $isset_user = mysqli_fetch_assoc($isset_email);

   if($isset_user['id'] == $usuario['id'] || empty($isset_user))
   {
   //Actualizar el  USUARIO EN LA TABLA DE USUARIOS EN LA BBDD

   $sql = "UPDATE usuarios SET ".
          "nombre = '$nombre', ".
          "apellidos = '$apellido', ".
          "email = '$email' ".
          "WHERE id = ".$usuario['id'];

$guardar = mysqli_query($BD, $sql);


if($guardar)
{
   $_SESSION['usuario'] ['nombre'] = $nombre;
   $_SESSION['usuario'] ['apellidos'] = $apellido;
   $_SESSION['usuario'] ['email'] = $email;

   $_SESSION['completado'] = "Tus datos se han actualizado con exito";
}
else  
{
   $_SESSION['errores'] ['general'] = "Fallo en actualizar!!";
}

}
else
{
   $_SESSION['errores'] ['general'] = "Fallo en actualizar, ya este gmail esta registrado!!";
 
}

}
else
{
$_SESSION['errores'] = $errores;


}

  

}

header('location:../editar.php');






?>

