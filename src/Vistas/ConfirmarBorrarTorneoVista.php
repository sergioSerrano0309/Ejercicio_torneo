<?php 
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    require ("../Negocio/torneosReglasNegocio.php");
    $borrarTorneo = new TorneosReglasNegocio();
    $id = $_GET['id'];

    $borrarTorneo->borrarTorneo($id);
    header("Location: torneosVista.php")
?>