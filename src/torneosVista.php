<!doctype html>
<html>
<head>

</head>
<link rel="stylesheet" href="../css/torneoVista.css">
<body>
    <h1> Listado de torneos </h1>
    <?php
        require("torneosReglasNegocio.php");

        $torneosBL = new TorneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        echo "<table>";

            foreach ($datosTorneos as $torneo)
            {   
                echo "<tr>";      
                    echo "<td>".($torneo->getID())."</td>";
                    echo "<td>".($torneo->getNombre())."</td>";
                    echo "<td>".($torneo->getFecha())."</td>";
                    echo "<td>".($torneo->getEstado())."</td>";
                    echo "<td>".($torneo->getCampeon())."</td>";
                echo "</tr>";
            }

        echo "</table>"
    ?>
</body>

</html>