<?php
$error = false;
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
require ("../Negocio/usuarioReglasNegocio.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $usuarioBL = new UsuarioReglasNegocio();
    $perfil =  $usuarioBL->verificar($_POST['usuario'],$_POST['contraseña']);

    if ($perfil==="administrador")
    {
        
        session_start(); //inicia o reinicia una sesión
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: torneosVista.php");
    }
    else if($perfil==="jugador")
    {
        session_start(); //inicia o reinicia una sesión
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: listaTorneosVistaJugador.php");
    }
    else
    {
        $error = true;
    }
}
?>

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
    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Usuario">Nombre de usuario</label><br><br>
        <input type="text" id="usuario" name="usuario" value=""><br><br>
        <label for="Contraseña">Contraseña</label><br><br>
        <input type="password" id="contraseña" name="contraseña" value=""><br><br>
        <input class="boton" type="submit" value="Confirmar">
        <?php 
        if($error == true)
        {
            echo "<p class='error'>Error al iniciar sesión</p>";
        } 
        ?>
    </form> 
    </div>
</body>
</html>