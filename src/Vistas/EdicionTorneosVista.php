<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/gestionTorneosVista.css">
</head>
<body>
    <?php
        require("../Negocio/partidosReglasNegocio.php");
        echo "<table>";
            echo "<tr>";
                echo "<td class='titulo'>ID</td>";
                echo "<td class='titulo'>Nombre del Torneo</td>";
                echo "<td class='titulo'>Fecha</td>";
                echo "<td class='titulo'>Estado</td>";
                echo "<td class='titulo'>Jugadores</td>";
                echo "<td class='titulo'>Campeón</td>";
                echo "<td class='titulo'></td>";
            echo "</tr>";
            
            foreach ($datosTorneos as $torneo)
            {   
                
                echo "<tr>";

                    echo "<td>".($torneo->getID())."</td>";
                    echo "<td>".($torneo->getNombre())."</td>";
                    echo "<td>".($torneo->getFecha())."</td>";
                    echo "<td>".($torneo->getEstado())."</td>";
                    echo "<td>".($torneo->getJugadores())."</td>";
                    echo "<td>".($torneo->getCampeon())."</td>";
                    echo "<td><a href='listaPartidosVistaJugador.php'><div class='ver'>Ver</div></a></td>";
                echo "</tr>";
            }
            
        echo "</table>"
    ?>
</body>
</html>