<?php
//Importamos las variables del formulario de contacto

@$Nombre = addslashes($_POST['Nombre']);
@$Email = addslashes($_POST['Email']);
@$Telefono = addslashes($_POST['Telefono']);
@$Mensaje = addslashes($_POST['Mensaje']);



//Preparamos el Mensaje de contacto
$cabeceras = "From: $Email\n" //La persona que envia el correo
 . "Reply-To: $Email\n";
$asunto = "CONTÁCTENOS - RoadWays GPS"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "roadwaysgps@gmail.com"; //cambiar por tu Email
$contenido = "$Nombre ha solicitado ser contactado desde el WebSite: http://www.roadwaysgps.com\n"
. "\n"
. "Nombre: $Nombre\n"
. "Email: $Email\n"
. "Telefono: $Telefono\n"
. "Mensaje: $Mensaje\n"
. "\n";
//Enviamos el Mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el Mensaje se envía muestra una confirmación

echo '<script>alert("Tu mensaje fue enviado correctamente.")</script>';

//die("Gracias, su Mensaje se envio correctamente.");
}else//{
//Si el Mensaje no se envía muestra el Mensaje de error
//die("Error: Su información no pudo ser enviada, intente más tarde");
//}
?> <?php echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost:8080/repository/lyenconsultingsas/Index.html\">"; ?>