<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
<?php include("seguridad.php"); ?>
<a href="cerrarsesion.php">Cerrar Sesion</a>

<form class="alta"  method="post" action="ConexionAlta.php">
<center>  <p>Nombre   :<input type="text" name="nombre"><br></p>
<p>Apellido  :<input type="text" required name="apellido"><br> </p>
<p>Dirección:<input type="text" required name="direccion"><br></p>
<p>Teléfono :<input type="text" required name="telefono"><br></p>
<p>E-mail   :<input type="text" required name="email"><br></p>
<input class="Boton" type="Submit" name="enviar" value="Aceptar información"></center>
</form>
    <button  class="regresar" style="vertical-align:middle">Regresar </button>
    <script>
         $( "button.regresar" ).click(function() {
  location.href="MenuAlta.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});</script>


</body>
</html>
