<?php

require("../AccesoDatos/usuarioAccesoDatos.php");

class UsuarioReglasNegocio
{

	function __construct()
    {
    }

    function verificar($usuario, $clave)
    {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->verificar($usuario,$clave);
        
        return $res;
        
    }

    function insertar($usuario, $perfil, $clave)
    {
        if(strlen($clave) >= 8)
        {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->insertar($usuario, $perfil, $clave);
        }
        return $res;
    }
}
