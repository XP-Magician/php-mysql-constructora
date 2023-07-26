<?php
require_once("../work/Model/VehiculoDb.php");

class VehiculoController extends Controller
{
    function index(){
        $this->cargaVistas("vehiculo",null);
    }

    function AddVehiculo(){
        if (isset ($_POST["Matricula"]) && ($_POST["Modelo"])){
            $ma=$_POST["Matricula"];
            $mo=$_POST["Modelo"];
            $bd=new VehiculoDb();
            if (!$bd->SiExiste($ma)){
                $array=[$ma,$mo];
                $bd->AddVehiculo($array);
                $this->resultadoOperacion("exito");
            }
            else{
                $this->resultadoOperacion("fallo");
            }
        }
        else{
            $this->resultadoOperacion("fallo");
        }
    }

    function getVehiculos(){
        $bd=new VehiculoDb();
        return $bd->getVehiculo();
    }


}