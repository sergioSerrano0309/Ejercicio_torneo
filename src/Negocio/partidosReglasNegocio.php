<?php
require("../AccesoDatos/partidosAccesoDatos.php");

class PartidosReglasNegocio
{
    private $_ID;
    private $_JUGADORA;
    private $_JUGADORB;
    private $_RONDA;
    private $_GANADOR;

	function __construct()
    {

    }

    function init($id, $jugadorA, $jugadorB, $ronda, $ganador)
    {
        $this->_ID = $id;
        $this->_JUGADORA = $jugadorA;
        $this->_JUGADORB = $jugadorB;
        $this->_RONDA = $ronda;
        $this->_GANADOR = $ganador;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getJugadorA()
    {
        return $this->_JUGADORA;
    }

    function getJugadorB()
    {
        return $this->_JUGADORB;
    }

    function getRonda()
    {
        return $this->_RONDA;
    }

    function getGanador()
    {
        return $this->_GANADOR;
    }

    function obtener($torneoId)
    {
        $partidosDAL = new PartidosAccesoDatos();
        $rs = $partidosDAL->obtener($torneoId);

		$listaPartidos =  array();

        foreach ($rs as $partido)
        {
            $oPartidosReglasNegocio = new PartidosReglasNegocio();
            $oPartidosReglasNegocio->Init($partido['ID'], $partido['JUGADORA'], $partido['JUGADORB'], $partido['RONDA'], $partido['GANADOR']);
            array_push($listaPartidos,$oPartidosReglasNegocio);
         
        }
        
        return $listaPartidos;
        
    }

    function borrarPartido($id)
    {
        $partidoBorrado = new PartidosAccesoDatos();
        $res = $partidoBorrado->borrarPartido($id);
        
    }
}
?>