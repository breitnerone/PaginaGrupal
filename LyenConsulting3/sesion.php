<?php 

//Funcion de conexion con la base de datos
    function conexionBD() 
    { 
      $link = mysql_connect("localhost","root", "") or die("<h2>No se encuentra el servidor</h2>");
      $db = mysql_select_db("lyenbd",$link) or die("<h2>Error de conexion</h2>");
    }
	 
//Llamado de la base de datos
    $conn = conexionBD();
	
//Variables

$Nombr = $_POST['nombreCompleto'];
$nick = $_POST['nick'];
$Emai = $_POST['correo'];
$pass = $_POST['password'];

//funcion enviar datos a la bd

mysql_query ("INSERT INTO usuarios VALUES ('','$Nombr','$nick','$Emai','$pass')") or die("<h2>Error envio</h2>");

echo '
	<h2>Envio exitoso</h2>
	<h2>Gracias por contactarnos.</h2>
	<a href="Index.php"><img alt="img0" src="http://auteam.com.mx/Resources/Dis_Corporativo/Img_Generales/icono_volver.png" /></a>
	'
?>