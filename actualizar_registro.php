<?php
    if(isset($_POST['id']) && isset($_POST['asistieron']) && isset($_POST['asistio']) && isset($_POST['registro']) && isset($_POST['mostrar']))
    {
        if(isset($_POST['id']) && $_POST['asistieron']!="" && $_POST['asistio']!="" && $_POST['registro']!="" && $_POST['mostrar']!="")
        {
			//$con=@mysqli_connect("localhost", "id1306875_moradomx", "addc1243c", "id1306875_eventos");
			$con=@mysqli_connect("localhost", "root", "1234", "bd_evento");
			if ($con)
			{
				$sql="";
				$asistio=0;
				$registro=0;
				$mostrar=0;
				
                if($_POST['asistio']=="SI")
                {
                    $asistio=1;
                }
                if($_POST['registro']=="SI")
                {
                    $registro=1;
                }
                if($_POST['mostrar']=="SI")
                {
                    $mostrar=1;
                }
                
				
				if($asistio==1 && $_POST['registro']==0)
				{
					$sql="update tb_invitados set asistieron=".$_POST['asistieron'].",asistio=".$asistio.",
					registro=1,mostrar=".$mostrar.",hora_llegada=current_time() where id=".$_POST['id']."";
				}					
				else if($asistio==0 && $_POST['registro']==1)
				{
					$sql="update tb_invitados set asistieron=0,asistio=0,
					registro=".$registro.",mostrar=".$mostrar." where id=".$_POST['id']."";					
				}	
				else if($asistio==0 && $_POST['registro']==0)
				{
					$sql="update tb_invitados set asistieron=0,asistio=0,
					registro=".$registro.",mostrar=".$mostrar." where id=".$_POST['id']."";					
				}

                if($_POST['asistieron']>1 && $registro==1)
                {
					$sql="update tb_invitados set asistieron=".$_POST['asistieron'].",asistio=1,
					registro=1,mostrar=".$mostrar.",hora_llegada=current_time() where id=".$_POST['id']."";						
                }
                
				$resultado = mysqli_query($con,$sql);
				if ($resultado)
				{
					include("consulta_invitados.php");
				}
				else 
				{
					echo $sql;
				}
			}			
        }
		else
		{
			echo '<script>alert("NO EXISTENDATOS PARA ACTUALIZAR2")</script>';
		}
	}
	else
	{
			echo '<script>alert("NO EXISTENDATOS PARA ACTUALIZAR3")</script>';
	}
?>