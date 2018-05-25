<?php

	$con=@mysqli_connect("localhost", "id1306875_moradomx", "addc1243c", "id1306875_eventos");
	//$con=@mysqli_connect("localhost", "root", "1234", "bd_evento");
	if ($con)
	{
		$cont=1;
		$tabla='			
		   <table cellspacing="0">
				<tr>
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Pregunta</th>
					<th>Personas</th>
					<th>Asistieron</th>
					<th>Hora de Llegada</th>
					<th>Asistio</th>
					<th>Registro</th>
					<th>Mostrar</th>
					<th>Guardar</th>
				</tr>';
		$fetch = mysqli_query($con,"SELECT * FROM tb_invitados"); 
		/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
		while ($row = mysqli_fetch_array($fetch)) 
		{
			$tabla.="<tr>";
			$tabla.="<td>".$row['nombre']."</td>";
			
			if($row['telefono']!="")
			{
				$tabla.="<td><input type='text' id='".$row['telefono']."' value='".$row['telefono']."' style='width:70px; text-align:center; border:0;' readonly></td>";
			}
			else
			{
				$tabla.="<td>S/C</td>";
			}
			
			if($row['email']!="")
			{
				$tabla.="<td><input type='text' id='".$row['email']."' value='".$row['email']."' style='width:70px; text-align:center; border:0;' readonly></td>";
			}
			else
			{
				$tabla.="<td>S/C</td>";
			}
			
			if($row['pregunta']!="")
			{
				$tabla.="<td>".$row['pregunta']."</td>";
			}
			else
			{
				$tabla.="<td>S/C</td>";
			}
			
			$tabla.="<td>".$row['personas']."</td>";
			
			
			if($row['asistieron']!="")
			{
				$items="";
				for($i=0;$i<$row['personas'];$i++)
				{
					if($row['asistieron']==($i+1))
					{
						$items.='<option value="'.($i+1).'" selected>'.($i+1).'</option>';
					}
					else
					{
						$items.='<option>'.($i+1).'</option>';
					}	
				}
				$tabla.='<td>
					<select class="input-md form-control" id="asistieron'.$cont.'" style="width:70px; text-align:center; border:0;">
						'.$items.'
					</select></td>';
			}
			else
			{
				$items="";
				for($i=0;$i<$row['personas'];$i++)
				{
					$items.='<option>'.($i+1).'</option>';
				}
				$tabla.='<td>
					<select class="input-md form-control" id="asistieron'.$cont.'" style="width:70px; text-align:center; border:0;">
						'.$items.'
					</select></td>';
			}
						
			if($row['hora_llegada']!="")
			{
				$tabla.="<td>".$row['hora_llegada']."</td>";
			}
			else
			{
				$tabla.="<td>S/H</td>";
			}
			
			if($row['asistio']=="1")
			{				
				$tabla.='<td>
					<select class="input-md form-control" id="asistio'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option selected>SI</option>
					</select></td>';
			}
			else
			{
				$tabla.='<td>
					<select class="input-md form-control" id="asistio'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option>SI</option>
					</select></td>';
			}
			
			if($row['registro']=="1")
			{				
				$tabla.='<td>
					<select class="input-md form-control" id="registro'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option selected>SI</option>
					</select></td>';
			}
			else
			{
				$tabla.='<td>
					<select class="input-md form-control" id="registro'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option>SI</option>
					</select></td>';
			}
			
			if($row['mostrar']=="1")
			{				
				$tabla.='<td>
					<select class="input-md form-control" id="mostrar'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option selected>SI</option>
					</select></td>';
			}
			else
			{
				$tabla.='<td>
					<select class="input-md form-control" id="mostrar'.$cont.'" style="width:70px; text-align:center; border:0;">
						<option>NO</option>
						<option>SI</option>
					</select></td>';
			}
			
			$tabla.='<td>
						<center>
							<div id="btn_guardar'.$cont.'">
								<button type="button" onclick="guardar(\''.$row['id'].'_'.$cont.'\',\'btn_guardar'.$cont.'\');" class="btn btn-mod btn-w btn-round btn-large">
								<i class="fa fa-check"></i>&nbsp;&nbsp;Guardar</button>
							</div>
						</center>
					</td>';
			
			$tabla.="</tr>";
			$cont=$cont+1;
		}
		
		echo $tabla."
				   </table>";
	}		
?>