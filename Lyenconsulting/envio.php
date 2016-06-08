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

$Nombr = $_POST['nombre'];
$Apellid = $_POST['apellido'];
$Carg = $_POST['cargo'];
$Telefon = $_POST['telefono'];
$Emai = $_POST['email'];
$Empres = $_POST['empresa'];
$Nro_empleado = $_POST['numero'];	
$Pai = $_POST['pais'];
$Mensaj = $_POST['mensaje'];

//funcion enviar datos a la bd

mysql_query ("INSERT INTO contactenos VALUES ('','$Nombr','$Apellid','$Carg','$Telefon','$Emai','$Empres','$Nro_empleado','$Pai','$Mensaj')") or die("<h2>Error envio</h2>");

echo '
	<h2>Envio exitoso</h2>
	<h2>Gracias por contactarnos.</h2>
	<a href="Index.php"><img alt="img0" src="http://auteam.com.mx/Resources/Dis_Corporativo/Img_Generales/icono_volver.png" /></a>
	'
?>