<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/LoginVista.css">
</head>
<body>
    <div class="cajaSesión">
    <form method = "POST" action="">
        <label for="Usuario">Nombre de usuario</label><br><br>
        <input type="text" id="usuario" name="usuario" value=""><br><br>
        <label for="Contraseña">Contraseña</label><br><br>
        <input type="password" id="contraseña" name="contraseña" value=""><br><br>
        <input class="boton" type="submit" value="Confirmar">
        <p><a href="torneosVista.php">Vista Torneo Admin</a></p>
        <p><a href="listaTorneosVistaJugador.php">Vista Torneo Jugador</a></p>
    </form> 
    </div>
</body>
</html>