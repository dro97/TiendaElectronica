<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
<title>Alta</title>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/styleBoton.css">



    <script  src="js/index.js"></script>
    <link rel="stylesheet" href="estilos.css">
    </head>
 <body background="css/electronica.jpg">
     <?php
      include("seguridad.php");
        ?>
<div class="container">
  <button id="button" class="cerrar">Cerrar Sesion</button>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br>v
  <center>
  <br><button class="usuario" style="vertical-align:middle"><span>Reporte Usuarios </span></button>
<br><br><br><br>
<br><button class="componentes" style="vertical-align:middle"><span>Reporte Productos </span></button>
<br><br><br><br>
<br><button class="regresar" style="vertical-align:middle"><span>Regresar </span></button>
    </center>

    <script>
    $( "button.usuario" ).click(function() {
  location.href="reporte.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
            $( "button.cerrar" ).click(function() {
  location.href="cerrarsesion.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
               $( "button.componentes" ).click(function() {
  location.href="CrossJoin.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
               $( "button.proveedor" ).click(function() {
  location.href="altaDistribuidor.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});

               $( "button.regresar" ).click(function() {
  location.href="MenuPrincipal.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
$( "button.cerrar" ).click(function() {
  location.href="cerrarsesion.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});




    </script>


    </body>
</html>
