<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <title>DMB</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Yhosymar Martinez Marcial">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/rev-slider.css">
        <link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen" />        
		<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Joti+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<style type="text/css">
		/* fuentes en nuestro disco duro */
		@font-face 
		{
			font-family: "Brilliant Regular";
			src: url("fonts/Brilliant.otf") format("opentype");
		}
		@font-face 
		{
			font-family: "Stingray Regular";
			src: url("fonts/Stingray.otf") format("opentype");
		}
		@font-face 
		{
			font-family: "Dream Regular";
			src: url("fonts/Dream.ttf") format("truetype");
		}
		@font-face 
		{
			font-family: "Francisco Regular";
			src: url("fonts/Francisco.ttf") format("truetype");
		}
		@font-face 
		{
			font-family: "Beauty Regular";
			src: url("fonts/Beauty.ttf") format("truetype");
		}
		@font-face
		{
			font-family: "Honey Regular";
			src: url("fonts/Honey.ttf") format("truetype");
		}
		@font-face 
		{
			font-family: "Shellomita Regular";
			src: url("fonts/Shellomita.otf") format("opentype");
		}
		@font-face
		{
			font-family: "AlwaysForeverBold Regular";
			src: url("fonts/AlwaysForeverBold.ttf") format("truetype");
		}
		@font-face
		{
			font-family: "Reading Regular";
			src: url("fonts/Reading.ttf") format("truetype");
		}
		@font-face 
		{
			font-family: "Antro_Vectra Regular";
			src: url("fonts/Antro_Vectra.otf") format("opentype");
		}
		@font-face
		{
			font-family: "Modern Regular";
			src: url("fonts/Modern.otf") format("opentype");
		}
		@font-face
		{
			font-family: "Quantify Regular";
			src: url("fonts/Quantify.ttf") format("truetype");
		}
		@font-face
		{
			font-family: "Quickpen Regular";
			src: url("fonts/Quickpen.otf") format("opentype");
		}
		@font-face
		{
			font-family: "Carolyna Regular";
			src: url("fonts/Carolyna.otf") format("opentype");
		}
		.fuente-0{font-family:"Carolyna Regular";font-size: 80px; letter-spacing:4pt;word-spacing:1pt;}
		.fuente-1{font-family:"Quickpen Regular";font-size: 45px; letter-spacing:4pt;word-spacing:1pt;}
		.fuente-2{font-family:"Quantify Regular";font-size: 33px; letter-spacing:4pt;word-spacing:7pt;}
		.fuente-3{font-family:"AlwaysForeverBold Regular";font-size: 60px;}
		.fuente-4{font-family:"Antro_Vectra Regular";font-size: 80px;}
		
		::-webkit-input-placeholder {
		   text-align: center;
		}

		:-moz-placeholder { /* Firefox 18- */
		   text-align: center;  
		}

		::-moz-placeholder {  /* Firefox 19+ */
		   text-align: center;  
		}

		:-ms-input-placeholder {  
		   text-align: center; 
		}
		</style>
        
    </head>
    <body class="appear-animate">
	
	<?php
		if(!isset($_COOKIE['xvsaracamacho']))
		{ 			  
            echo "
            <script type='text/javascript'>
            window.location='./';
            </script>";
		} 
	?>
	
        <!-- Page Loader -->
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>
        
        <div id="registro">
            <!-- Section -->
            <section class="page-section bg-dark-alfa-50" data-background="images/quince/05.jpg">
                <div class="container relative">
                    
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs">
                            <li>
								<label class="fuente-2">MUESTRA ESTE CODIGO QR</label>
                            </li>                            
                        </ul>
                    </div>
                    <?php
						$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

						//html PNG location prefix
						$PNG_WEB_DIR = 'temp/';

						include "./qr/qrlib.php";    

						//ofcourse we need rights to create temp dir
						if (!file_exists($PNG_TEMP_DIR))
							mkdir($PNG_TEMP_DIR);

						$filename = $PNG_TEMP_DIR.'qr.png';

						$matrixPointSize = 10;
						$errorCorrectionLevel = 'L';
						
						QRcode::png('https://saeimmoradomx.000webhostapp.com/DMB/asistencia.php?nombre='.$_COOKIE['xvsaracamacho'], $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
						
						echo '</br>
						  <div class="row">
							<div class="col-md-12">
								<center>
									<img src="temp/qr.png" alt="qr" class="img-circles">
								</center>
						  </br>
						  </div>';
					?>
                </div>
            </section>
            <!-- End Section -->
		</div>
        
		<footer class="page-section footer" data-background="images/quince/09.jpg">
			<div class="container">
			
				<div class="container relative">							
					<div class='fuente-4' style="color:black;text-align:center">Nombre de la Quinceañera</div>
					</br>
					<div class='fuente-3' style="color:black;text-align:center">Los sueños nacen para ser cumplidos.</div>
				</div>
				</br>
				</br>
				</br>
				<div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
					<a href="#top"><img src="images/favicon.png" width="78" height="36" alt="" /></a>
				</div>				
				<div class="footer-social-links mb-110 mb-xs-60">
					<a href="https://www.facebook.com/DMB-Films-555548251459438" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/dmbfilms/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
				</div>				
				<div class="footer-text">					
					<div class="footer-copy font-alt">
						<a href="https://www.facebook.com/DMB-Films-555548251459438" target="_blank">&copy; DMB Films</a>.
					</div>
					
					<div class="footer-made">
						Films * Photo * Team China 
					</div>
					
				</div>
			 </div>
			 <div class="local-scroll">
				 <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
			 </div>
		</footer>						
		
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script> 
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/rev-slider.js"></script>        
		<script type="text/javascript" src="js/bootstrap3-typeahead.min.js"></script>
    </body>
	
</html>
