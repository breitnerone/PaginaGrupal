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
		<center>
            <h2 class="hidden">Footer Banner Section </h2>            
			<div class="contact">
					<form class="login-form" method="post" action="validar.php">				
						<h2>LOGIN</h2>
						<div class="message">	
							<input type="text" name="usuario" class="form-input" placeholder="Usuario" required/><br />		
							<input type="text" name="password" class="form-input" placeholder="Pasword" required"/><br />
							
							<input type="submit" class="more_btn" value="Enviar" name="enviar">
						</div>
					</form>
					<form class="login-form" method="post" action="reg.php">				
						<h2>CREAR USUARIO</h2>
						<div class="message">	
							<input type="text" name="nombreCompleto" class="form-input" placeholder="Nombre completo" required/><br />		
							<input type="text" name="nick" class="form-input" placeholder="Nick" required/><br />		
							<input type="email" name="correo" class="form-input" placeholder="Email" required/><br />		
							<input type="text" name="password" class="form-input" placeholder="Pasword" required"/><br />
							
							<input type="submit" class="more_btn" value="Enviar" name="Crear usuario">
						</div>	
					</form>
			</div>
		</center>			
      	</section>
</body>
</html>