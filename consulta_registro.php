<?php
    if(isset($_POST['tipo']))
    {
        if($_POST['tipo']!="")
        {
			$personas=0;
			//$con=@mysqli_connect("localhost", "id1306875_moradomx", "addc1243c", "id1306875_eventos");
			$con=@mysqli_connect("localhost", "root", "1234", "bd_evento");
			if ($con)
			{
				$fetch = mysqli_query($con,"SELECT personas FROM tb_invitados where nombre='".$_POST['tipo']."' and registro=0 limit 1"); 
				/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
				while ($row = mysqli_fetch_array($fetch)) 
				{
					$personas=$row['personas'];
				}
			}
			
			if($personas!="")
			{
            echo '
				<!-- Telefono -->
				<div class="form-group">
					<input type="number" name="telefono" id="telefono" class="input-md round form-control" placeholder="TELEFONO" style="text-align:center"  pattern="\d*" max="9999999999" required>
				</div>
				
				<!-- Email -->
				<div class="form-group">
					<input type="text" name="email" id="email" class="input-md round form-control" placeholder="CORREO ELECTRONICO" style="text-align:center" pattern=".{3,100}" required>
				</div>

				<!-- Donde me Conociste -->
				<div class="form-group">
					<input type="text" name="donde" id="donde" style="text-align:center" class="input-md round form-control" placeholder="ESCRIBE COMO O DONDE ME CONOCISTE" maxlength="1000" required>
				</div>       
				</br>
				<!-- NUMERO DE INVITACIONES -->
				<center><label class="fuente-2" style="color:black;text-align:center;font-size:17px;">NUMERO DE PERSONAS</label></center>
				<center><label class="fuente-0"style="color:#ffffff;text-align:center;font-size:45px;">'.$personas.'</label></center>
				
				<!-- Send Button -->
				<div class="mb-10">
					<center>
						<button type="button" onclick="registrar();" name="registrar" id="registrar" class="btn btn-mod btn-w btn-round btn-large">
						<i class="fa fa-check"></i>&nbsp;&nbsp;REGISTRAR ASISTENCIA</button>
					</center>
				</div>
            </form>';
			
			}
			else
			{
				echo '<center>
					<div class="alert notice">
						<i class="fa fa-lg fa-exclamation-triangle">
						</i>&nbsp;&nbsp;&nbsp;&nbsp;<label class="fuente-2" style="text-align:center;font-size:12px;">
							ESTA PERSONA NO ESTA EN LA LISTA
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
							DEBES ESCRIBIR TU NOMBRE
							</label>
					</div></center>';
		}
			
	}
?>