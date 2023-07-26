<?php
require_once ("bdConfig.php");

class UsuarioDb
{
    function __construct()
    {
        $bd= new Database();
        $this->conn=$bd->dbConnection();
    }

    function AddUsuario($array){
        $dateTime = new DateTime('now', new DateTimeZone('America/Santiago'));
        $today = $dateTime->format('Y-m-d');
        $st=$this->conn->prepare("INSERT INTO Usuario VALUES (:r,:n,:c,:fr,1)");
        $st->bindValue(":r",$array[0]);
        $st->bindValue(":n",$array[1]);
        $st->bindValue(":c",$array[2]);
        $st->bindValue(":fr",$today);
        $st->execute();
    }

    function SiExiste($nombre){
        $st=$this->conn->prepare("SELECT * FROM Usuario WHERE Nombre = :n");
        $st->bindValue(":n",$nombre);
        $st->execute();
        if ($st->rowCount()>0){
            return true;
        }
        else{
            return false;
        }
    }

    function recuperaUsuario($nombre){
        $st=$this->conn->prepare("SELECT * FROM Usuario WHERE Nombre = :n");
        $st->bindValue(":n",$nombre);
        $st->execute();
        if ($st->rowCount()>0){
            $rs=$st->fetchAll();
            return $rs;
        }
        else{
            return null;
        }
    }

    function getUsuarios(){
        $st=$this->conn->prepare("SELECT * FROM Usuario");
        $st->execute();
        return $st->fetchAll();
    }

}