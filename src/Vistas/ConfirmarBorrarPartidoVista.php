<?php 
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    require ("../Negocio/partidosReglasNegocio.php");
    $borrarPartido = new PartidosReglasNegocio();
    $id = $_GET['id'];
    $torneoId = $_GET["torneoId"];
    $borrarPartido->borrarPartido($id);
    header("Location: EdicionTorneosVista.php?id=$torneoId")
?>