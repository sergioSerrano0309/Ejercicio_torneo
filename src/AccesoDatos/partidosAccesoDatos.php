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

	function obtener($torneoId)
	{
		$conexion = mysqli_connect('127.0.0.1','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'torneosTenisMesaBD');
		$consulta = mysqli_prepare($conexion, "SELECT ID, JUGADORA, JUGADORB, RONDA, GANADOR FROM T_Partidos WHERE torneoId = $torneoId");
        $consulta->execute();
        $result = $consulta->get_result();

		$partidos =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($partidos,$myrow);

        }
		return $partidos;
	}


	function borrarPartido($id)
	{
		$conexion = mysqli_connect('127.0.0.1','root','12345');
		if (mysqli_connect_errno())
		{
			echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'torneosTenisMesaBD');
		$consulta = mysqli_prepare($conexion, "delete from T_Partidos where id=$id");
        $res = $consulta->execute();

		return $res;
	}

}
