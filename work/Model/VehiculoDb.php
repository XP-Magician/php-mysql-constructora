<?php
require_once('bdConfig.php');

class VehiculoDb
{
    function __construct(){
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    function  SiExiste($Matricula){
        $st=$this->conn->prepare("SELECT * FROM Vehiculo WHERE Matricula = :ma");
        $st->bindValue(":ma",$Matricula);
        $st->execute();
        if ($st->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }

    function AddVehiculo($array){
        $st=$this->conn->prepare("INSERT INTO Vehiculo VALUES (:ma,:mo)");
        $st->bindValue(":ma",$array[0]);
        $st->bindValue(":mo",$array[1]);
        $st->execute() or die ("Ocurrio un error al registrar Vehiculo");
    }

    function getVehiculo(){
        $st=$this->conn->prepare("SELECT * FROM Vehiculo");
        $st->execute();
        $rs= $st->fetchAll();
        return $rs;
    }

}