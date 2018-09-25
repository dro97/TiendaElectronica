<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
<title>Alta</title>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
<body>
     <?php
      include("seguridad.php");
        ?>
<a href="cerrarsesion.php">Cerrar Sesion</a>
  <center>
  <br><button class="usuario" style="vertical-align:middle"><span>Alta Usuarios </span></button>

<br><button class="componentes" style="vertical-align:middle"><span>Alta Productos </span></button>

<br><button class="proveedor" style="vertical-align:middle"><span>Alta Proveedor </span></button>

<br> <button class="regresar" style="vertical-align:middle"><span>Regresar </span></button>
    </center>

    <script>
    $( "button.usuario" ).click(function() {
  location.href="altaUsuarios.php";
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
  location.href="altaComponentes.php";
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





    </script>


    </body>
</html>
