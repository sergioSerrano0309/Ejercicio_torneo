<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

class TorneosAccesoDatos
{
	
	function __construct()
    {
    }

	function obtener()
	{
		$conexion = mysqli_connect('127.0.0.1','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'torneosTenisMesaBD');
		$consulta = mysqli_prepare($conexion, "SELECT ID, NOMBRE, FECHA, ESTADO, CAMPEON FROM T_Torneos ");
        $consulta->execute();
        $result = $consulta->get_result();

		$torneos =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($torneos,$myrow);

        }
		return $torneos;
	}
}