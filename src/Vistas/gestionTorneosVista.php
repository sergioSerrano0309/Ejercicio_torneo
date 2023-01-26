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
        <from method = "POST" action="torneosVistaAdministrador.php">
            <label for="Usuario">Nombre del Torneo</label><br><br>
            <input type="text" id="nombre" name="nombre" value=""><br><br>
            <label for="fecha">Fecha</label><br><br>
            <input type="text" id="fecha" name="fecha" value=""><br><br>
            <input class="boton" type="submit" value="Confirmar">
        </from>
    </div>
</body>
</html>