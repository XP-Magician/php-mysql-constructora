<?php
require_once ("bdConfig.php");

class ClienteDb
{
    function __construct()
    {
        $database = new Database();
        $this->conn=$database->dbConnection();
    }

    function SiExiste($rut){
        $st = $this->conn->prepare("SELECT * FROM Cliente WHERE Rut = :r");
        $st->bindValue(":r",$rut);
        $st->execute();
        if ($st->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }

    function AddCliente ($array){
        $st=$this->conn->prepare("INSERT INTO Cliente (rut,nombre,telefono,correo) VALUES (:r,:n,:t,:c)");
        $st->bindValue(":r",$array[0]);
        $st->bindValue(":n",$array[1]);
        $st->bindValue(":t",$array[2]);
        $st->bindValue(":c",$array[3]);
        $st->execute() or die ("No se pudo registrar cliente");
    }

    function getCliente(){
        $st = $this->conn->prepare("SELECT * FROM Cliente");
        $st->execute();
        $rs = $st->fetchAll();
        return $rs;
    }

}