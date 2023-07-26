<?php
require_once ("bdConfig.php");

class ObraDb
{
    function __construct(){
        $db = new Database();
        $this->conn=$db->dbConnection();
    }

    function Addobra($array){

        $st=$this->conn->prepare("INSERT INTO Obra
        (Nombre,Direccion,Estado,Cliente_Rut,fechaInicio,fechaTermino) 
        VALUES (:nom,:dir,:est,:rutC,:fi,:ft)");


        $st->bindValue(":nom",$array[0]);
        $st->bindValue(":dir",$array[1]);
        $st->bindValue(":est",$array[2]);
        $st->bindValue(":rutC",$array[3]);
        $st->bindValue(":fi",$array[4]);
        $st->bindValue(":ft",$array[5]);
        $st->execute() or die ("Error al agregar obra");
    }

    function GetObra(){
        $st=$this->conn->prepare("SELECT * FROM Obra");
        $st->execute();
        $rs=$st->fetchAll();
        return $rs;
    }

}