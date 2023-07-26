<?php
spl_autoload_register(function ($nombreClase){
    require_once($_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Libs/'.$nombreClase.'.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Views/estaticas/CargadorCabecera.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Libs/Config.php');
});

$begin =new Routes();
