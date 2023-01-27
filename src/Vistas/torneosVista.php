<!doctype html>
<html>
<head>

</head>
<link rel="stylesheet" href="../../css/torneoVista.css">
<body>
    <h1> Listado de Torneos </h1>
    <?php
        require("../Negocio/torneosReglasNegocio.php");

        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $nombre = $_POST["nombre"];
            $fecha = $_POST["fecha"];

            echo $nombre;
            echo $fecha;
            header("Location: torneosReglasNegocio.php");
        }                                                   

        $torneosBL = new TorneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        echo "<a  href='gestionTorneosVista.php'><div class='crearTorneo'>crear torneo</div></a><div class='registros'>Número de registros: ".count($datosTorneos)."</div>";
        echo "<a href='logout.php' class = 'cerrarSesion'>Cerrar sesión</a>";
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
                    echo "<td><a class='ver' href=''>Editar</a></td>";
                    echo "<td><a class='borrar' href='TorneosVista.php' >Borrar</a></td>";
                echo "</tr>";

            }

        echo "</table>"
    ?>
</body>

</html>