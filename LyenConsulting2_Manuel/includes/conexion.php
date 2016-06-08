<?php 
    //Variables Generales
    $Zona1="";
    $Zona2="";
    $Zona3="";
    $ExitoTitulo1="";
    $ExitoTexto1="";
    $ExitoImg1="";
    $ExitoTitulo2="";
    $ExitoTexto2="";
    $ExitoImg2="";
    $ExitoTitulo3="";
    $ExitoTexto3="";
    $ExitoImg3="";
    $ExitoTitulo4="";
    $ExitoTexto4="";
    $ExitoImg4="";
    $ServicioTitulo1="";
    $ServicioTexto1="";
    $ServicioImg1="";
    $ServicioTitulo2="";
    $ServicioTexto2="";
    $ServicioImg2="";
    $ServicioTitulo3="";
    $ServicioTexto3="";
    $ServicioImg3="";
    $ServicioTitulo4="";
    $ServicioTexto4="";
    $ServicioImg4="";
	


    //Id para querys - posicion 1 de la bd
    $id = 1;

    //Funcion de conexion con la base de datos
    function conexionBD() 
    { 
      mysql_connect("localhost","root", ""); 
      mysql_select_db("lyenbd"); 
    }
    //Llamado de la base de datos
    $conn = conexionBD();
    
    //Query para zona nosotros
    $query_nosotros = "SELECT Zona1, Zona2, Zona3 FROM zona_nosotros where Id_nosotros ='$id'";
    $resultNosotros = mysql_query($query_nosotros) or die(mysql_error());   	
    while ($DatosNosotros = mysql_fetch_assoc($resultNosotros)) 
    {  
        $Zona1 = ($DatosNosotros['Zona1']."");
        $Zona2 = ($DatosNosotros['Zona2']."");
        $Zona3 = ($DatosNosotros['Zona3']."");
    }

    //Query para zona casos de exito
    $query_Exito = "SELECT * FROM zona_casosexito where Id_casosexito ='$id'";
    $resultExito = mysql_query($query_Exito) or die(mysql_error());   	
    while ($DatosExito = mysql_fetch_assoc($resultExito)) 
    {  
        $ExitoTitulo1 = ($DatosExito['Exito_titulo1']."");
        $ExitoTexto1 = ($DatosExito['Exito_texto1']."");
        $ExitoImg1 = ($DatosExito['Exito_img1']."");
        $ExitoTitulo2 = ($DatosExito['Exito_titulo2']."");
        $ExitoTexto2 = ($DatosExito['Exito_texto2']."");
        $ExitoImg2 = ($DatosExito['Exito_img2']."");
        $ExitoTitulo3 = ($DatosExito['Exito_titulo3']."");
        $ExitoTexto3 = ($DatosExito['Exito_texto3']."");
        $ExitoImg3 = ($DatosExito['Exito_img3']."");
        $ExitoTitulo4 = ($DatosExito['Exito_titulo4']."");
        $ExitoTexto4 = ($DatosExito['Exito_texto4']."");
        $ExitoImg4 = ($DatosExito['Exito_img4']."");
    }

    //Query para zona servicios
    $query_Servicio = "SELECT * FROM zona_servicios where Id_servicios ='$id'";
    $resultServicio = mysql_query($query_Servicio) or die(mysql_error());   	
    while ($DatosServicio = mysql_fetch_assoc($resultServicio)) 
    {  
        $ServicioTitulo1 = ($DatosServicio['Servicios_titulo1']."");
        $ServicioTexto1 = ($DatosServicio['Servicios_texto1']."");
        $ServicioImg1 = ($DatosServicio['Servicios_img1']."");
        $ServicioTitulo2 = ($DatosServicio['Servicios_titulo2']."");
        $ServicioTexto2 = ($DatosServicio['Servicios_texto2']."");
        $ServicioImg2 = ($DatosServicio['Servicios_img2']."");
        $ServicioTitulo3 = ($DatosServicio['Servicios_titulo3']."");
        $ServicioTexto3 = ($DatosServicio['Servicios_texto3']."");
        $ServicioImg3 = ($DatosServicio['Servicios_img3']."");
        $ServicioTitulo4 = ($DatosServicio['Servicios_titulo4']."");
        $ServicioTexto4 = ($DatosServicio['Servicios_texto4']."");
        $ServicioImg4 = ($DatosServicio['Servicios_img4']."");        
    }
	
	

?>

