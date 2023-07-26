<?php
require_once ("../work/Model/ClienteDb.php");

class ClienteController extends Controller
{
    function index(){
        $this->cargaVistas("registraCliente",null);
    }

    function AddCliente(){
        if (isset ($_POST["nombre"]) && ($_POST["rut"]) && ($_POST["telefono"]) && ($_POST["correo"])){
            $bd=new ClienteDb();
            if (!$bd->SiExiste($_POST["rut"])){
                $array=[
                    0=>$_POST["rut"],
                    1=>$_POST["nombre"],
                    2=>$_POST["telefono"],
                    3=>$_POST["correo"]
                ];
                $bd->AddCliente($array);
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

    function getClientes(){
        $bd= new ClienteDb();
        return $bd->getCliente();
    }

}