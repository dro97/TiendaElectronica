<!DOCTYPE html>
 <meta charset="UTF-8">
<html>

    <head>

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
   //width: 300px;
   // height: 300px;
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 10px #c3c3c3;
}

        #flip{


     text-align:  center;
          background-color: azure;
            border: solid 10px #c3c3c3;
        }
        #flip2{
             width: 200px;
        position:relative;

            left:105em;
          background-color: lawngreen;
            border: solid 10px #c3c3c3;

        }




#panel {
    padding: 50px;
    display: none;
}
</style>

</head>

<body>
     <?php
      include("seguridad.php");


        ?>
    <p><button class="cerrar" style="vertical-align:middle"><span>Cerrar Sesion </span></button></p>
<div id="flip">Presiona para desplegar</div>
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
      location.href="reporte.php";
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
</body>
</html>
