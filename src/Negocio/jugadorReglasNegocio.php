<?php
require("../AccesoDatos/jugadoresAccesoDatos.php");

class JugadorReglasNegocio
{
    private $_ID;
    private $_NOMBRE;
    private $_PARTIDOSJUGADOS;
    private $_PARTIDOSGANADOS;
    private $_TORNEOSDISPUTADOS;
    private $_TORNEOSGANADOS;

	function __construct()
    {

    }

    function init($id, $nombre, $partidosJugados, $partidosGanados, $torneosDisputados, $torneosGanados)
    {
        $this->_ID = $id;
        $this->_NOMBRE = $nombre;
        $this->_PARTIDOSJUGADOS = $partidosJugados;
        $this->_PARTIDOSGANADOS = $partidosGanados;
        $this->_TORNEODISPUTADOS = $torneosDisputados;
        $this->_TORNEOSGANADOS = $torneosGanados;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getNombre()
    {
        return $this->_NOMBRE;
    }

    function getPartidosJugados()
    {
        return $this->_PARTIDOSJUGADOS;
    }

    function getPartidosGanados()
    {
        return $this->_PARTIDOSGANADOS;
    }

    function getTorneosDisputados()
    {
        return $this->_TORNEOSDISPUTADOS;
    }

    function getTorneosGanados()
    {
        return $this->_TORNEOSGANADOS;
    }

    function obtener($nombre)
    {
        $jugadorDAL = new JugadorAccesoDatos();
        $rs = $jugadorDAL->obtener($nombre);

		$listaDatosJugador =  array();

        foreach ($rs as $jugador)
        {
            $oJugadorReglasNegocio = new JugadorReglasNegocio();
            $oJugadorReglasNegocio->Init($jugador['ID'], $jugador['NOMBRE'], $jugador['PARTIDOSJUGADOS'], $jugador['PARTIDOSGANADOS'], $jugador['TORNEOSDISPUTADOS'], $jugador['TORNEOSGANADOS']);
            array_push($listaDatosJugador,$oJugadorReglasNegocio);
         
        }
        
        return $listaDatosJugador;
        
    }
}