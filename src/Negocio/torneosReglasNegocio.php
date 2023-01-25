<?php

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

    function init($id, $nombre, $fecha, $estado, $campeon)
    {
        $this->_ID = $id;
        $this->_NOMBRE = $nombre;
        $this->_FECHA = $fecha;
        $this->_ESTADO = $estado;
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
            $oTorneosReglasNegocio->Init($torneo['ID'], $torneo['NOMBRE'], $torneo['FECHA'], $torneo['ESTADO'], $torneo['CAMPEON']);
            array_push($listaTorneos,$oTorneosReglasNegocio);
         
        }
        
        return $listaTorneos;
        
    }
}