<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class PartidosAccesoDatos
{
    function __construct()
    {
    }   

    function insertarPartidos($torneoId, $jugadorA, $jugadorB)
	{

		$conexion = mysqli_connect('127.0.0.1','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'torneosTenisMesaBD');
        $sql = "INSERT INTO T_Partidos (torneoId, jugadorA, jugadorB, ronda) values ('$torneoId','$jugadorA', '$jugadorB','cuartos')";
        $consulta = mysqli_prepare($conexion, $sql );
        $res = $consulta->execute();

		return $res;
	}
}
