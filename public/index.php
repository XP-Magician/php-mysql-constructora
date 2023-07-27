<?php
spl_autoload_register(function ($nombreClase){
    require_once($_SERVER['DOCUMENT_ROOT'].'/work/Libs/'.$nombreClase.'.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/work/Views/estaticas/CargadorCabecera.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/work/Libs/Config.php');
});

$begin =new Routes();
