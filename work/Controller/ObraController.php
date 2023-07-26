<?php
require_once ("../work/Model/ObraDb.php");
require_once ("ClienteController.php");
class ObraController extends Controller
{

    function index(){
        $ruts = new ClienteController();
        $array =$ruts->getClientes();
        $this->cargaVistas("obra",$array);
    }

    function AddObra(){
        if (isset($_POST["nombre"]) && $_POST["direccion"]  && $_POST["rut"]
        && $_POST["fechaInicio"] && $_POST["fechaTermino"]){
        // aqui no realize validacion, como la obra puede tener nombres iguales, y el id nunca se repite
            // al ser autoincremental
            $array =[
                0=>$_POST["nombre"],
                1=>$_POST["direccion"],
                2=>$_POST["estado"],
                3=>$_POST["rut"],
                4=>$_POST["fechaInicio"],
                5=>$_POST["fechaTermino"]
            ];
            $bd = new ObraDb();
            $bd->Addobra($array);
            $this->resultadoOperacion("exito");
        }
        else{
            $this->resultadoOperacion("fallo");
        }
    }

    function getObras(){
        $bd=new ObraDb();
        return $bd->GetObra();
    }
}