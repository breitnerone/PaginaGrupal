<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
//Funcion de conexion con la base de datos
    function conexionBD() 
    { 
      $link = mysql_connect("localhost","root", "") or die("<h2>No se encuentra el servidor</h2>");
      $db = mysql_select_db("lyenbd",$link) or die("<h2>Error de conexion</h2>");
    }
	 
//Llamado de la base de datos
    $conn = conexionBD();
	
//Variables
$nick = $_POST['usuario'];
$password = $_POST['password'];

//funcion enviar datos a la bd
$sqlResultado = mysql_query ("SELECT * FROM usuarios WHERE nick = '$nick'");

$row = mysql_fetch_array($sqlResultado);
$password2 = $row["password"];

if ($password == $password2)
{	
	session_start();			   
	//establecermos las variables de sesión
	$_SESSION["usuario"] = $row["nick"];
	$_SESSION["nombreCompleto"] = $row["nombreCompleto"];
	
	header("Location: index.php");
}
else
{
    die("<h2>Error envio</h2>");
}
?>