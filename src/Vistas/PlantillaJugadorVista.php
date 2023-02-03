<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/torneoVista.css">
</head>
<body>
    <?php
        require("../Negocio/jugadorReglasNegocio.php");
        $jugadorBL = new JugadorReglasNegocio();
        $nombre = $_GET["nombreJugador"];
        $datosJugador = $jugadorBL->obtener($nombre);
        
        echo "<a href='logout.php' class = 'cerrarSesion'>Cerrar sesión</a>";

        echo "<table>";
            echo "<tr>";
                echo "<td class='titulo'>Id Jugador</td>";
                echo "<td class='titulo'>Nombre del Jugador</td>";
                echo "<td class='titulo'>Partidos Jugados</td>";
                echo "<td class='titulo'>Partidos Ganados</td>";
                echo "<td class='titulo'>Torneos Disputados</td>";
                echo "<td class='titulo'>Torneos Ganados</td>";
                echo "<td class='titulo'>Porcentaje de Victorias</td>";
            echo "</tr>";
            
            foreach ($datosJugador as $jugador)
            {   
                
                echo "<tr>";
                    echo "<td>".($jugador->getID())."</td>";
                    echo "<td>".($jugador->getNombre())."</a></td>";
                    echo "<td>".($jugador->getPartidosJugados())."</td>";
                    echo "<td>".($jugador->getPartidosGanados())."</td>";
                    echo "<td>".($jugador->getTorneosDisputados())."</td>";
                    echo "<td>".($jugador->getTorneosGanados())."</td>";
                    echo "<td>";
                    if($jugador->getPartidosJugados() > 0)
                    {
                        echo (($jugador->getPartidosGanados()) / ($jugador->getPartidosJugados()) ) * 100;
                    } 
                    else if ($jugador->getPartidosJugados() == 0)
                    {
                        echo 0;
                    }
                    echo "%</td>";
                echo "</tr>";
            }
            
        echo "</table>"
    ?>
</body>
</html>