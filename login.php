<?php

session_start();
$email=$_POST['email'];
$password=$_POST['password'];


include("conexion.php");



$proceso = $conexion->query("SELECT  * FROM administracion WHERE email='$email' AND password='$password'");


if($result = mysqli_fetch_array($proceso)){
  $_SESSION['u_usuario']=$email;
  header("Location: MenuPrincipal.php");
}
else{
header("Location: index.php");
}

?>
