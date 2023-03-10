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
        require("../Negocio/partidosReglasNegocio.php");
        $partidosBL = new PartidosReglasNegocio();
        $torneoId = $_GET["id"];
        $datosPartidos = $partidosBL->obtener($torneoId);
        
        echo "<a href='logout.php' class = 'cerrarSesion'>Cerrar sesión</a>";

        echo "<table>";
            echo "<tr>";
                echo "<td class='titulo'>Nº del Partido</td>";
                echo "<td class='titulo'>Jugador A</td>";
                echo "<td class='titulo'>Jugador B</td>";
                echo "<td class='titulo'>Fase</td>";
                echo "<td class='titulo'>Ganador</td>";
            echo "</tr>";
            
            foreach ($datosPartidos as $partido)
            {   
                
                echo "<tr>";
                    echo "<td>".($partido->getID())."</td>";
                    echo "<td><a href='PlantillaJugadorVista.php?nombreJugador=".($partido->getJugadorA())."'>".($partido->getJugadorA())."</a></td>";
                    echo "<td><a href='PlantillaJugadorVista.phpnombreJugador=".($partido->getJugadorB())."'>".($partido->getJugadorB())."</td>";
                    echo "<td>".($partido->getRonda())."</td>";
                    echo "<td>".($partido->getGanador())."</td>";
                echo "</tr>";
            }
            
        echo "</table>"
    ?>
</body>
</html>