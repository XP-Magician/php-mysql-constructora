<?php
require_once('bdConfig.php');

class EmpleoDb
{
    function __construct()
    {
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    function siExiste($nombre){
        $st=$this->conn->prepare("SELECT * FROM Empleo WHERE Nombre = :n");
        $st->bindValue(":n",$nombre);
        $st->execute();
        if($st->rowCount()>0){
            return true;

        }else{
            return false;
        }
    }

    function addEmpleo($nombre)
    {
        $st = $this->conn->prepare("INSERT INTO Empleo VALUES (:n)");
        $st->bindvalue(':n',$nombre);
        $st->execute()or die("No pude hacer el registro del empleo");
        return $st;
    }

    function getEmpleos(){
        $st=$this->conn->prepare("SELECT * FROM Empleo");
        $st->execute();
        $rs=$st->fetchAll();
        return $rs;

    }
}