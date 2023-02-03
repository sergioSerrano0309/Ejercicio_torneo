<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class JugadorAccesoDatos
{
    function __construct()
    {
    }   

        function obtener($nombre)
        {
            $conexion = mysqli_connect('127.0.0.1','root','12345');
            if (mysqli_connect_errno())
            {
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
            }
            mysqli_select_db($conexion, 'torneosTenisMesaBD');
            $consulta = mysqli_prepare($conexion, "SELECT ID, NOMBRE, PARTIDOSJUGADOS, PARTIDOSGANADOS, TORNEOSDISPUTADOS, TORNEOSGANADOS FROM T_Jugadores WHERE NOMBRE LIKE '$nombre'");
            $consulta->execute();
            $result = $consulta->get_result();

            $jugador =  array();

            while ($myrow = $result->fetch_assoc()) 
            {
                array_push($jugador,$myrow);

            }
            return $jugador;
            
        }

        function obtenerJugadores()
        {
            $conexion = mysqli_connect('127.0.0.1','root','12345');
            if (mysqli_connect_errno())
            {
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
            }
            mysqli_select_db($conexion, 'torneosTenisMesaBD');
            $consulta = mysqli_prepare($conexion, "SELECT ID, NOMBRE, PARTIDOSJUGADOS, PARTIDOSGANADOS, TORNEOSDISPUTADOS, TORNEOSGANADOS FROM T_Jugadores");
            $consulta->execute();
            $result = $consulta->get_result();

            $jugador =  array();

            while ($myrow = $result->fetch_assoc()) 
            {
                array_push($jugador,$myrow);

            }
            return $jugador;
            
        }
}
