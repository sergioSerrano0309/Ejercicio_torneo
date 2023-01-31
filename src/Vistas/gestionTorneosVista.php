<?php
$error = false;
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require ("../Negocio/torneosReglasNegocio.php");

 if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $torneoNuevo = new TorneosReglasNegocio();
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];

    $torneoNuevo->insertarTorneo($nombre, $fecha); 
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
    <div class = 'cajaSesion'>
        <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="Usuario">Nombre del Torneo</label><br><br>
            <input type="text" id="nombre" name="nombre" value=""><br><br>
            <label for="fecha">Fecha</label><br><br>
            <input type="date" id="fecha" name="fecha" value=""><br><br>
            <input class="boton" type="submit" value="Confirmar">
        </form>
    </div>
</body>
</html>