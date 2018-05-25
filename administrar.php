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
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/style_foo.css">
		

        <style type="text/css">
        
                $baseColor: #398B93;
                $borderRadius: 10px;
                $imageBig: 100px;
                $imageSmall: 60px;
                $padding: 10px;

                body {
                   background-color: lighten($baseColor, 30%);
                   * { box-sizing: border-box; }
                }

                .header {
                   background-color: darken($baseColor, 5%);
                   color: white;
                   font-size: 1.5em;
                   padding: 1rem;
                   text-align: center;
                   text-transform: uppercase;
                }

                img {
                   border-radius: 50%;
                   height: $imageSmall;
                   width: $imageSmall;
                }

                .table-users {
                   border: 1px solid darken($baseColor, 5%);
                   border-radius: $borderRadius;
                   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
                   max-width: calc(100% - 2em);
                   margin: 1em auto;
                   overflow: hidden;
                   width: 800px;
                }

                table {
                   width: 100%;
                   
                   td, th { 
                          color: darken($baseColor, 10%);
                          padding: $padding; 
                   }
                   
                   td {
                          text-align: center;
                          vertical-align: middle;
                          
                          &:last-child {
                                 font-size: 0.95em;
                                 line-height: 1.4;
                                 text-align: left;
                          }
                   }
                   
                   th { 
                          background-color: lighten($baseColor, 50%);
                          font-weight: 300;
                   }
                   
                   tr {     
                          &:nth-child(2n) { background-color: black; }
                          &:nth-child(2n+1) { background-color: lighten($baseColor, 55%) }
                   }
                }

                @media screen and (max-width: 700px) {   
                   table, tr, td { display: block; }
                   
                   td {
                          &:first-child {
                                 position: absolute;
                                 top: 50%;
                                 transform: translateY(-50%);
                                 width: $imageBig;
                          }

                          &:not(:first-child) {
                                 clear: both;
                                 margin-left: $imageBig;
                                 padding: 4px 20px 4px 90px;
                                 position: relative;
                                 text-align: left;

                                 &:before {
                                        color: lighten($baseColor, 30%);
                                        content: '';
                                        display: block;
                                        left: 0;
                                        position: absolute;
                                 }
                          }

                          &:nth-child(2):before { content: 'Name:'; }
                          &:nth-child(3):before { content: 'Email:'; }
                          &:nth-child(4):before { content: 'Phone:'; }
                          &:nth-child(5):before { content: 'Comments:'; }
                   }
                   
                   tr {
                          padding: $padding 0;
                          position: relative;
                          &:first-child { display: none; }
                   }
                }

                @media screen and (max-width: 500px) {
                   .header {
                          background-color: transparent;
                          color: lighten($baseColor, 60%);
                          font-size: 2em;
                          font-weight: 700;
                          padding: 0;
                          text-shadow: 2px 2px 0 rgba(0,0,0,0.1);
                   }
                   
                   img {
                          border: 3px solid;
                          border-color: lighten($baseColor, 50%);
                          height: $imageBig;
                          margin: 0.5rem 0;
                          width: $imageBig;
                   }
                   
                   td {
                          &:first-child { 
                                 background-color: lighten($baseColor, 45%); 
                                 border-bottom: 1px solid lighten($baseColor, 30%);
                                 border-radius: $borderRadius $borderRadius 0 0;
                                 position: relative;   
                                 top: 0;
                                 transform: translateY(0);
                                 width: 100%;
                          }
                          
                          &:not(:first-child) {
                                 margin: 0;
                                 padding: 5px 1em;
                                 width: 100%;
                                 
                                 &:before {
                                        font-size: .8em;
                                        padding-top: 0.3em;
                                        position: relative;
                                 }
                          }
                          
                          &:last-child  { padding-bottom: 1rem !important; }
                   }
                   
                   tr {
                          background-color: white !important;
                          border: 1px solid lighten($baseColor, 20%);
                          border-radius: $borderRadius;
                          box-shadow: 2px 2px 0 rgba(0,0,0,0.1);
                          margin: 0.5rem 0;
                          padding: 0;
                   }
                   
                   .table-users { 
                          border: none; 
                          box-shadow: none;
                          overflow: visible;
                   }
                }
		
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
		.fuente-4{font-family:"Antro_Vectra Regular";font-size: 70px;}
		
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
	
        <!-- Page Loader
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>-->
                                
	<section class="small-section bg-dark-alfa-30 parallax-2" data-background="images/quince/10.jpg">
                
                        <div class="row">
                                <div class="col-md-3 col-md-offset-3">                        
                                        <div class="mb-10">
                                                <center>
                                                        <form action="./LQR/index.php">
                                                        <button type="submit" id="boton_leer" class="btn btn-mod btn-w btn-round btn-large">
                                                        <i class="icon-focus"></i>&nbsp;&nbsp;LEER CODIGO QR</button>
                                                        </form>
                                                </center>
                                        </div>
                                </div>
                                <div class="col-md-3">                    
                                        <div class="mb-10">
                                                <center>
                                                        <form action="./">
                                                        <button type="submit" id="boton_inicio" class="btn btn-mod btn-w btn-round btn-large">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-browser"></i>&nbsp;&nbsp;INICIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </form>
                                                </center>
                                        </div>                                        
                                </div>
                        </div>
                        </br>
			<div class="relative container">				
				<div class="row">					
					<div class="col-md-8">						
						<div class="container relative">
							<h1 class="hs-line-11 font-alt mb-20 mb-xs-0" style="color:white;text-align:center;font-size:25px;">Administrador de Invitados</h1>
						</div>	
						<div class="container relative">
						<center>
							<label class="fuente-1" style="color:white;text-align:center;font-size:25px;">Nombre de la Quinceañera</label>
						</center>
						</div>
					</div>					
				</div>
				
				<div class="row">
					<div id="contenedor" class="col-md-10">
						<center>
							<?php
								include "consulta_invitados.php";
							?>
						</center>
					</div>
				</div>
			</div>
		</section>
		
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
		
        <script type="text/javascript">
        function guardar(nombre,contenedor)
        {
                $('#'+contenedor).html('<div class="row"><div class="col-md-12"><center><img src="./images/loader.gif"  style="width:20px;height:20px;"></center></div></div>');			
                
                var array = nombre.split("_");
                        
                var id=array[0];	
                var asistieron=document.getElementById("asistieron"+array[1]).value;			
                var asistio=document.getElementById("asistio"+array[1]).value;			
                var registro=document.getElementById("registro"+array[1]).value;	
                var mostrar=document.getElementById("mostrar"+array[1]).value;	
                                        
                $.ajax(
                {
                        type: "POST",
                        dataType: 'html',
                        url:"actualizar_registro.php",
                        data:'id='+id+'&asistieron='+asistieron+'&asistio='+asistio+'&registro='+registro+'&mostrar='+mostrar,
                        success: function(datos)
                        {
                                $('#contenedor').html(datos);
                        }
                });			
        }
        </script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/stacktable.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
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
