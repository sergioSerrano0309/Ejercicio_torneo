<?php
$error = false;
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require ("../Negocio/partidosReglasNegocio.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $torneoNuevo = new PartidosReglasNegocio();
    $torneoId = $_GET['id'];
    $torneoNuevo->insertarPartido($torneoId, $jugadorA, $jugadorB, $ronda); 
    header("Location: torneosVista.php");   

}
?>

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
    
        require("../Negocio/jugadorReglasNegocio.php");
        $jugadoresBL = new JugadorReglasNegocio();
        $torneoId = $_GET['id'];
        $datosJugadores = $jugadoresBL->obtenerJugadores();
        

        
    ?>
    <a href='logout.php' class = 'cerrarSesion'>Cerrar sesión</a>
    <div class = 'cajaSesion crearPartido' >
        <form  class='formularioCrearPartido' method = "POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=$torneoId"; ?>'>
            <table>
                <tr>
                    <td>
                        <label for="jugadorA">Jugador A</label>
                        <select id="jugadorA" name="jugadorA">
                            <?php
                                foreach ($datosJugadores as $jugador) 
                                { 
                                    echo "<option value='".($jugador->getNombre())."'>".($jugador->getNombre())."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr class="jugadorB">
                    <td>
                        <label for="jugadorB">Jugador B</label>
                        <select id="jugadorB" name="jugadorB">
                            <?php
                                foreach ($datosJugadores as $jugador) 
                                { 
                                    echo "<option value='".($jugador->getNombre())."'>".($jugador->getNombre())."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr class="ronda">
                    <td>
                        <label for="Ronda">Ronda</label>
                        <select id="Ronda" name="Ronda">
                                <option value="Cuartos">Cuartos</option>
                                <option value="Semifinal">Semifinal</option>
                                <option value="Final">Final</option>
                        </select>
                    </td>
                </tr>
                <tr class="ganador">
                    <td>
                        <label for="ganador">Ganador</label>
                        <select id="Ronda" name="Ronda">
                            <option value="nulo"></option>
                            <?php
                                foreach ($datosJugadores as $jugador) 
                                { 
                                    echo "<option value='".($jugador->getNombre())."'>".($jugador->getNombre())."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <input class="boton botonPartidos" type=submit value="confirmar">
        </form>
        
    </div>
</body>
</html>