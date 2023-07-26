<?php


class CargadorCabecera
{
    function __construct()
    {
        $this->cargar();
    }

    private function cargar(){
            require_once ( $_SERVER['DOCUMENT_ROOT']."/DiegoFabrega_TrabajoWeb/work/Views/estaticas/cabecera.php");
        }
}