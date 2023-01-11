<?php
		ini_set('display_errors', 'On');
		ini_set('html_errors', 0);
 		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Torneo');
		$id_categoria = $_GET['id'];
		$sanitized_id = mysqli_real_escape_string($conexion, $id_categoria);
		$consulta = mysqli_prepare($conexion, "SELECT id, nombre, fecha FROM T_competicion WHERE id = ?");
        $consulta->bind_param("s", $sanitized_id);
        $consulta->execute();
        
        $result = $consulta->get_result();

        while ($myrow = $result->fetch_assoc()) 
        {
			echo $myrow['id'].", ".$myrow['nombre'].", ".$myrow['fecha'];
		}

?>