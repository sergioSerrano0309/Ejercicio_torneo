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
     $id = $_GET["id"];
     echo "<h1>Seguro que quieres Borrar este Torneo?</h1>";
     echo "<a class='boton' href='torneosVista.php'>Cancelar</a><br><br>";
     echo "<a class='boton' href = 'ConfirmarBorrarTorneoVista.php?id=".$id."'>Confirmar</a>"
    ?>
   
    
</body>
</html>