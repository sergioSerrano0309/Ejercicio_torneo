<!doctype html>
<html>
<head>

</head>
<link rel="stylesheet" href="../../css/torneoVista.css">
<body>
    <h1> Listado de Torneos </h1>
    <?php
        require("../Negocio/torneosReglasNegocio.php");

        $torneosBL = new TorneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        echo "<a  href=''><div class='crearTorneo'>crear torneo</div></a><div class='registros'>Número de registros: ".count($datosTorneos)."</div>";
        echo "<table>";
            echo "<tr>";
                echo "<td class='titulo'>ID</td>";
                echo "<td class='titulo'>Nombre del Torneo</td>";
                echo "<td class='titulo'>Fecha</td>";
                echo "<td class='titulo'>Estado</td>";
                echo "<td class='titulo'>Campeón</td>";
                echo "<td class='titulo'></td>";
                echo "<td class='titulo'></td>";
            echo "</tr>";
            foreach ($datosTorneos as $torneo)
            {   
                echo "<tr>";      
                    echo "<td>".($torneo->getID())."</td>";
                    echo "<td>".($torneo->getNombre())."</td>";
                    echo "<td>".($torneo->getFecha())."</td>";
                    echo "<td>".($torneo->getEstado())."</td>";
                    echo "<td>".($torneo->getCampeon())."</td>";
                    echo "<td><a href=''>Editar</a></td>";
                    echo "<td><a href=''>Borrar</a></td>";
                echo "</tr>";
            }

        echo "</table>"
    ?>
</body>

</html>