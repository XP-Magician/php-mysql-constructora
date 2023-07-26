<?php
require_once ("../work/Model/EmpleadoDb.php");
require_once ("ObraController.php");
require_once ("VehiculoController.php");
require_once ("EmpleoController.php");

class EmpleadoController extends Controller
{

    function index(){
        $v = new VehiculoController();
        $e = new EmpleoController();
        $o = new ObraController();
        $array=[
            0=>$v->getVehiculos(),
            1=>$e->getEmpleos(),
            2=>$o->getObras()
        ];
        $this->cargaVistas("registroEmpleado",$array);
    }

    function AddEmpleado(){
        if (isset($_POST["rut"]) && ($_POST["nombre"]) && ($_POST["direccion"])
        && ($_POST["fono"]) && ($_POST["correo"]) && ($_POST["cargo"])
        && ($_POST["matricula"]) && ($_POST["obra"]) ){
            $bd=new EmpleadoDb();
            if (!$bd->SiExiste($_POST["rut"])){
                $array=[
                    0=>$_POST["rut"],
                    1=>$_POST["nombre"],
                    2=>$_POST["direccion"],
                    3=>$_POST["fono"],
                    4=>$_POST["correo"],
                    5=>$_POST["cargo"],
                    6=>$_POST["matricula"],
                    7=>$_POST["obra"]
                ];
                $bd->AddEmpleado($array);
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

    function getEmpleados(){
        $bd= new EmpleadoDb();
        return $bd->GetEmpleados();
    }
}