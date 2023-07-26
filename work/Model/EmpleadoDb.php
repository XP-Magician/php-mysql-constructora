<?php
require_once ("bdConfig.php");

class EmpleadoDb
{
    function __construct()
    {
        $bd= new Database();
        $this->conn=$bd->dbConnection();
    }

    function AddEmpleado($array){

        $st=$this->conn->prepare("INSERT INTO Empleado 
        (Rut,Nombre,Direccion,Telefono,Correo,Estado,idCargo,vehiculoMatricula,obraAsignada) 
         VALUES (:r,:n,:d,:t,:c,true,:idc,:v,:obra)");


        $st->bindValue(":r",$array[0]);
        $st->bindValue(":n",$array[1]);
        $st->bindValue(":d",$array[2]);
        $st->bindValue(":t",$array[3]);
        $st->bindValue(":c",$array[4]);
        $st->bindValue(":idc",$array[5]);
        $st->bindValue(":v",$array[6]);
        $st->bindValue(":obra",$array[7]);
        $st->execute();
    }

    function SiExiste($rut){
        $st=$this->conn->prepare("SELECT * FROM Empleado WHERE Rut = :r");
        $st->bindValue(":r",$rut);
        $st->execute();
        if ($st->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }

    function GetEmpleados(){
        $st=$this->conn->prepare("SELECT * FROM Empleado");
        $st->execute();
        $rs=$st->fetchAll();
        return $rs;
    }
}