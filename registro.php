<?php
    if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['donde']))
    {
        if($_POST['nombre']!="" && $_POST['telefono']!="" && $_POST['email']!="" && $_POST['donde']!="")
        {
			//$con=@mysqli_connect("localhost", "id1306875_moradomx", "addc1243c", "id1306875_eventos");
			$con=@mysqli_connect("localhost", "root", "1234", "bd_evento");
			if ($con)
			{
					
				$sql="update tb_invitados set telefono='".$_POST['telefono']."',email='".$_POST['email']."',
				pregunta='".$_POST['donde']."',registro=1 where nombre='".$_POST['nombre']."'";
				
				$resultado = mysqli_query($con,$sql);
				if ($resultado)
				{
					setcookie('xvsaracamacho', $_POST['nombre'], time() + 365 * 24 * 60 * 60); 
					
					$ruta=qr($_POST['nombre']);
					echo '</br>
						  <div class="row">
							<div class="col-md-12">
								<center>
									<img src='.$ruta.' alt="qr" class="img-circles">
								</center>
						  </br>
						  </br>
							</div>
						  <div>
						  <div class="mb-10">
							<center>							
								<div class="mb-10">
									<a href="'.$ruta.'" class="btn btn-mod btn-w btn-round btn-large" download="qr.png">GUARDAR CODIGO QR</a>
								</div>
							</center>
						  </div>';
				}
				else 
				{
					echo '<center>
					<div class="alert error">
						<i class="fa fa-lg  fa-times-circle">
						</i>&nbsp;&nbsp;&nbsp;&nbsp;<label class="fuente-2" style=";text-align:center;font-size:12px;">
								ERROR AL ACTUALIZAR DATOS
							</label>
					</div></center>';
				} 
			}			
        }
		else
		{
			echo '<center>
				<div class="alert error">
					<i class="fa fa-lg  fa-times-circle">
					</i>&nbsp;&nbsp;&nbsp;&nbsp;<label class="fuente-2" style=";text-align:center;font-size:12px;">
						DEBES LLENAR LOS CAMPOS CORRECTAMENTE
						</label>
				</div></center>';
		}
	}
	else
	{
		echo '<center>
			<div class="alert error">
				<i class="fa fa-lg  fa-times-circle">
				</i>&nbsp;&nbsp;&nbsp;&nbsp;<label class="fuente-2" style=";text-align:center;font-size:12px;">
						'.$_POST['donde'].'
					</label>
			</div></center>';
	}
	
	function qr($nombre)
	{
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
		
		QRcode::png('https://saeimmoradomx.000webhostapp.com/DMB/asistencia.php?nombre='.$nombre, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
		
		return "temp/qr.png";
	}
		
?>