<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
require("../AccesoDatos/torneosAccesoDatos.php");

class TorneosReglasNegocio
{
    private $_ID;
    private $_NOMBRE;
    private $_FECHA;
    private $_ESTADO;
    private $_CAMPEON;

	function __construct()
    {

    }

    function init($id, $nombre, $fecha, $estado, $jugadores, $campeon)
    {
        $this->_ID = $id;
        $this->_NOMBRE = $nombre;
        $this->_FECHA = $fecha;
        $this->_ESTADO = $estado;
        $this->_JUGADORES = $jugadores;
        $this->_CAMPEON = $campeon;

    }

    function getID()
    {
        return $this->_ID;
    }

    function getNombre()
    {
        return $this->_NOMBRE;
    }

    function getFecha()
    {
        return $this->_FECHA;
    }

    function getEstado()
    {
        return $this->_ESTADO;
    }

    function getJugadores()
    {
        return $this->_JUGADORES;
    }

    function getCampeon()
    {
        return $this->_CAMPEON;
    }

    function obtener()
    {
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtener();

		$listaTorneos =  array();

        foreach ($rs as $torneo)
        {
            $oTorneosReglasNegocio = new TorneosReglasNegocio();
            $oTorneosReglasNegocio->Init($torneo['ID'], $torneo['NOMBRE'], $torneo['FECHA'], $torneo['ESTADO'], $torneo['JUGADORES'], $torneo['CAMPEON']);
            array_push($listaTorneos,$oTorneosReglasNegocio);
         
        }
        
        return $listaTorneos;
        
    }

    function insertarTorneo($nombre, $fecha)
    {
        $nuevoTorneoAccesoDatos = new TorneosAccesoDatos();
        $res = $nuevoTorneoAccesoDatos->insertarTorneo($nombre, $fecha);
    }

    function borrarTorneo($id)
    {
        $torneoBorrado = new TorneosAccesoDatos();
        $res = $torneoBorrado->borrarTorneo($id);
    }
}