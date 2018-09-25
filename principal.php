<?
 /*   include('seguridad.php');
    // No almacenar en el cache del navegador esta página.
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");                     // Expira en fecha pasada
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");        // Siempre página modificada
    header("Cache-Control: no-cache, must-revalidate");                   // HTTP/1.1
    header("Pragma: no-cache");  */                                         // HTTP/1.0
?>
	<HTML><head>
	<title>Sesion</title>
	</head>
	<body>
        <?php
        session_start();
        if(isset($_SESSION['u_usuario'])){
            echo "Sesion exitosa\n Bienvenido";

        }
        else{
            header("Location: index.php");

        }


        ?>





	 <a href="cerrarsesion.php"> Cerrar Sesion </a>

	<a  href="index.html"><center></center></a>
	 <iframe src="index.html" height="1000" width="1000" ></iframe>
	</body>
	</HTML>
