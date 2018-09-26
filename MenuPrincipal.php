<!DOCTYPE html>
 <meta charset="UTF-8">
<html>

    <head>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/styleBoton.css">
 <link rel="stylesheet"  href="src/css/lightslider.css"/>


    <script  src="js/index.js"></script>
    <link rel="stylesheet" href="estilos.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

</script>
    <style>
#panel {
    position: relative;
   width: 1122px;
    height: 100px;
    padding: 1px;
    text-align: center;
    background-color:#6acf5c ;
    border: solid 10px #c3c3c3;

  margin-top: 100px;
}

        #flip{


     text-align:  center;
          background-color: azure;
            border: solid 10px #4e9045;
        }
        #flip2{
             width: 200px;
        position:relative;

            left:105em;
          background-color: lawngreen;
            border: solid 10px #c3c3c3;

        }




#panel {
    padding: 100px;
    display: none;
}
</style>

</head>

<body background="css/electronica.jpg">

     <?php
      include("seguridad.php");


        ?>
<div class="container">
  <button id="button" class="cerrar">Cerrar Sesion</button>
</div>
    <br><br><br><br>

<div id="flip"><p style="font-family: times, serif; font-size:14pt; font-style:italic">Presiona para desplegar</p></div>
<div id="panel">

<button class="button" style="vertical-align:middle"><span>Alta </span></button>
<button class="boton" style="vertical-align:middle"><span>Reporte </span></button>
<button class="ocultar" style="display:none"><span>Regresar </span></button>

<script>
   var x=0,y=0;
$( "button.cerrar" ).click(function() {
  location.href="cerrarsesion.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
    $( "button.button" ).click(function() {
  location.href="MenuAlta.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});

  /*  $( "button.reporte" ).click(function() {
  $( "form.reporte" ).toggle("slow");
      $( "form.reporte" ).animate();
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;
})
*/
$( "button.usuarios" ).click(function() {
  location.href="altaUsuarios.php";
});


    $( "button.boton" ).click(function() {
      location.href="MenuComponentes.php";
  /*$( "iframe.reporte" ).toggle("slow");
  //    $( "p.alta" ).hide());
        $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
        $( "button.ocultar" ).show(500);
        y=1;*/


});
     $( "button.ocultar" ).click(function() {
  if(x==1){
       $( "form.alta" ).toggle("slow");
  }
         else{
             if(y==1){
                $( "form.modificar" ).toggle("slow");
             }
         }
         x=0;
        y=0;
        $( "button.boton" ).show(500);
    $( "button.button" ).show(500);
         $( "button.ocultar" ).hide(500);

});





</script>
    </div>
    </div>
</body>
</html>
