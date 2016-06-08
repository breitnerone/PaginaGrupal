<!doctype html>
 
<?php
    include ("includes/conexion.php")
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lyen Consulting</title>
    <link href="CSS/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Contendor -->
	<div class="container">
  		<!-- 1. Inicio Header -->
  		<header>
        	<a href="">
            	<img src="Imagenes/LogoLyenPeq.JPG" alt=""/>
    		</a>
    		<nav>
      			<ul>
        			<li><a href="#inicio">INICIO</a></li>
        			<li><a href="#nosotros">NOSOTROS</a></li>
        			<li><a href="#servicios">SERVICIOS</a></li>
        			<li><a href="#contact">CONTACTENOS</a></li>
      			</ul>
    		</nav>
  		</header>
        <!-- Fin Header -->
        
        <!-- 2. Inicio Banner -->
        <section class="hero" id="inicio">
        	<h2 class="hidden">Banner</h2>
        	<img src="Imagenes/Banner.jpg" alt=""/>
        </section>
        <!-- Fin Banner -->
      
        <!-- 3. Inicio Sección General -->
        <section class="about" id="nosotros">
            <h2 class="hidden">About</h2>
            <p class="text_column"><?php echo $Zona1 ?></p>
            <p class="text_column"><?php echo $Zona2 ?></p>
            <p class="text_column"><?php echo $Zona3 ?><br><br></p>
            <div>
            <h3>Conozca SalesForce</h3>
            <iframe width="854" height="480" src="https://www.youtube.com/embed/E-W2ILiRLnk"></iframe>
            </div>
        </section>        
        <!-- Fin Sección General -->
        
        <!-- 4. Inicio Sección -->
        <div class="clientes">
        	<div>
            	<span>CASOS DE &Eacute;XITO LYEN</span>
                <p class="parrafo">Nuestros clientes certifican los beneficios de subir sus procesos a la nube con nosotros</p>
            </div>
            <div class="thumbnail">
            	<a href="https://www.tucasaexpress.mx/" target="_blank"><?php echo "<img src='".$ExitoImg1."' alt=''>"; ?></a>
                <h4><?php echo $ExitoTitulo1 ?></h4>
                <p><?php echo $ExitoTexto1 ?></p>
            </div>
            <div class="thumbnail">
            	<a href="http://bnn.mx/" target="_blank"><?php echo "<img src='".$ExitoImg2."' alt=''>"; ?></a>                
                <h4><?php echo $ExitoTitulo2 ?></h4>
                <p><?php echo $ExitoTexto2 ?></p>
            </div>
            <div class="thumbnail">
            	<a href="http://www.bim.mx/Portal/?id_category=1" target="_blank"><?php echo "<img src='".$ExitoImg3."' alt=''>"; ?></a>                
                <h4><?php echo $ExitoTitulo3 ?></h4>
                <p><?php echo $ExitoTexto3 ?></p>
            </div>
            <div class="thumbnail">
            	<a href="http://playtelecom.com/" target="_blank"><?php echo "<img src='".$ExitoImg4."' alt=''>"; ?></a>              <h4><?php echo $ExitoTitulo4 ?></h4>
                <p><?php echo $ExitoTexto4 ?></p>
            </div>
        </div>
        <!-- Fin Sección -->
        
        <!-- 5. Inicio Sección -->
        <section class="banner" id="servicios">
            <h2 class="parallax">SERVICIOS</h2>
            <p class="parallax_description">Lyen Consulting ofrece diferentes servicios según sea la necesidad de su empresa, a continuación encontrará mas detalles de cada uno de ellos</p>
        </section>
        <!-- Fin Sección -->
        
  		<!-- 6. Inicio Seccion -->
        <footer>
            <article class="footer_column">
                <h3><?php echo $ServicioTitulo1 ?></h3>
                <?php echo "<img src='".$ServicioImg1."' alt='' class='cards'>"; ?>                
                <p><?php echo $ServicioTexto1 ?></p>
            </article>            
            <article class="footer_column">
                <h3><?php echo $ServicioTitulo2 ?></h3>
                <?php echo "<img src='".$ServicioImg2."' alt='' class='cards'>"; ?>                
                <p><?php echo $ServicioTexto2 ?></p>
            </article>
        </footer>
        <footer>
            <article class="footer_column">
                <h3><?php echo $ServicioTitulo3 ?></h3>
                <?php echo "<img src='".$ServicioImg3."' alt='' class='cards'>"; ?>
                <p><?php echo $ServicioTexto3 ?></p>
            </article>
            <article class="footer_column">
                <h3><?php echo $ServicioTitulo4 ?></h3>
                <a href="https://www.salesforce.com" target="_blank">
                <?php echo "<img src='".$ServicioImg4."' alt='' class='cards'>"; ?></a>               
                <p><?php echo $ServicioTexto4 ?></p>
            </article>
       </footer>
        <!-- Fin Seccion -->
        
        <!-- 7. Inicio sección -->
        <section class="footer_banner" id="contact">
            <h2 class="hidden">Footer Banner Section </h2>
            
            <form class="contact-form" action="contact.php" target="_blank">
        		<input type="submit" class="more_btn" value="Contáctenos">            
            </form>
            
        </section>
        <!-- Fin sección -->
        
        <!-- 8. Info Copyright -->
        <div class="copyright">&copy;2016 - <strong>Lyen Consulting</strong></div>
    </div>
    <!-- Fin Contenedor -->
</body>
</html>