<!doctype html>


<html>
<head>
    <meta charset="UTF-8">
    <title>Lyen Consulting</title>

    <link href="CSS/estilo.css" rel="stylesheet" type="text/css">
    	<script type="text/javascript" src="contacto.js"></script>
</head>
<body>    
    <div id="volver">
		<div class="ex2">
			<a href="Index.php"><img alt="img0" src="http://auteam.com.mx/Resources/Dis_Corporativo/Img_Generales/icono_volver.png" /></a>
		</div>
	</div>
        
        <!-- 7. Inicio sección -->
        <section class="footer_banner" id="contact">
            <h2 class="hidden">Footer Banner Section </h2>
            
       	<div class="contact">
			
			<h2>LOGIN</h2>
            
            
            	<form class="login-form" method="post" action="validar.php" onsubmit="return validar(this);">				
				<div class="message">	
					<input type="text" name="usuario" class="form-input" placeholder="Usuario" onblur="validar(this);"/><br />		
					<input type="text" name="password" class="form-input" placeholder="Pasword" onblur="validar(this); validaremail(this);"/><br />
					
                    <input type="submit" class="more_btn" value="Enviar" name="enviar">
					<input type="reset" class="more_btn" value="Borrar">
				</div>		
			</form>
    	</div>  
      	</section>
      
</body>
</html>