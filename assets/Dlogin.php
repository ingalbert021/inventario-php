<?php




//recojer datos del formulario
if(isset($_POST))
{
    //Iniciar la sesion y la conexion a db
    require_once 'conexion.php';
    //borrar datos antiguos
    if(isset($_SESSION['error_login']))
    {
        session_unset($_SESSION['error_login']);
    }
    //recojer datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //consultar para comprobar las credenciales del usuario
    $sql = "select * from usuarios where email = '$email'";
    $login = mysqli_query($BD, $sql);
    
         //mysqli_num_rows es para que cuente el numero de filas que de vuelvan 
    if($login && mysqli_num_rows($login) == 1)
    {
        $usuario = mysqli_fetch_assoc($login);
     
//Conprobar la contraseña / cifrar
$verify = password_verify($password, $usuario['password']);

if($verify)
{
    //utilizar una sesion para guardar los datos del usuario logueado

    $_SESSION['usuario'] = $usuario;


    
}
else{
    //si el usuario falla enviar una sesion con el fallo
    $_SESSION['error_login'] = "login incorrecto!!";
}
    }
else
{
    //mensaje de error
    $_SESSION['error_login'] = "login incorrecto!!";
}


    }

// Redirigir al index.php
header('Location: ../login.php');