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
        $partidosBL = new PartidosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
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
            
            foreach ($datosPartidos as $partido)
            {   
                
                echo "<tr>";

                    echo "<td>".($partido->getID())."</td>";
                    echo "<td>".($partido->getNombre())."</td>";
                    echo "<td>".($partido->getFecha())."</td>";
                    echo "<td>".($partido->getEstado())."</td>";
                    echo "<td>".($partido->getJugadores())."</td>";
                    echo "<td>".($partido->getCampeon())."</td>";
                echo "</tr>";
            }
            
        echo "</table>"
    ?>
</body>
</html>