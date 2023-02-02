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
     $torneoId = $_GET["torneoId"];
     $partidoId = $_GET["partidoId"];
     echo "<h1>Seguro que quieres Borrar este Partido?</h1>";
     echo "<a class='boton' href='EdicionTorneosVista.php?id=$torneoId'>Cancelar</a><br><br>";
     echo "<a class='boton' href = 'ConfirmarBorrarPartidoVista.php?id=".$partidoId."'>Confirmar</a><br><br>";
     echo "<a href='logout.php' class = 'cerrarSesion'>Cerrar sesión</a>";   
    ?>
   
    
</body>
</html>