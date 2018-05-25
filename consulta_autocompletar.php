<?php
if (isset($_GET['term'])){
	# conectare la base de 
	//$con=@mysqli_connect("localhost", "id1306875_moradomx", "addc1243c", "id1306875_eventos");
	$con=@mysqli_connect("localhost", "root", "1234", "bd_evento");
	
	$return_arr = array();
	/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
	if ($con)
	{
		$fetch = mysqli_query($con,"SELECT * FROM tb_invitados where nombre like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' and registro=0"); 
		
		/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
		while ($row = mysqli_fetch_array($fetch)) 
		{
			$row_array['value'] = $row['nombre'];
			$row_array['nombre']=$row['nombre'];
			array_push($return_arr,$row_array);
		}
	}

	/* Cierra la conexión. */
	mysqli_close($con);

	/* Codifica el resultado del array en JSON. */
	echo json_encode($return_arr);

}
?>