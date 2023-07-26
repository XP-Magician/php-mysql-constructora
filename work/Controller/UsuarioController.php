<?php
require_once ("EmpleadoController.php");
require_once("../work/Model/UsuarioDb.php");
class UsuarioController extends Controller
{
    public function index(){
            $bd= new EmpleadoController();
            $dat=$bd->getEmpleados();
            $this->cargaVistas("registroUsuario",$dat);
    }

    function AddUsuario(){
        if (isset($_POST["empleado"]) && $_POST["pass"] && $_POST["nombre"]){
            $bd= new UsuarioDb();
            if (!$bd->SiExiste($_POST["nombre"])){
                if (!$this->verificaRut($_POST["empleado"])){
                    $array=[
                        0=>$_POST["empleado"],
                        1=>$_POST["nombre"],
                        2=> $_POST["pass"]
                    ];
                    $bd->AddUsuario($array);
                    $this->resultadoOperacion("exito");
                }
                else{
                    $this->resultadoOperacion("fallo");
                }
            }
        }
        else{
            $this->resultadoOperacion("fallo");
        }
    }

    function Login(){
        if (isset($_POST["passw"]) && $_POST["nombreu"]){
            $bd= new UsuarioDb();
            if ($bd->SiExiste($_POST["nombreu"])){
                $user = $bd->recuperaUsuario($_POST["nombreu"]);
                $pass="";
                foreach ($user as $u){
                    $pass= $u[2];
                }
                if ($pass==$_POST["passw"]){
                    $this->resultadoOperacion("exito");

                }else{
                    $this->resultadoOperacion("fallo");
                }
            }
            else{
                $this->resultadoOperacion("fallo");
            }
        }
        else{
            $this->resultadoOperacion("fallo");
        }
    }

    function CargaLogin(){
        $this->cargaVistas("vistaLogin",null);
    }

    private function verificaRut($rut){
        $bd= new UsuarioDb();
        $rs=$bd->getUsuarios();
        foreach ($rs as $rs1){
            if ($rs1[0]==$rut){
                return true;
            }
        }
        return false;
    }

    function getUsuarios(){
        $bd= new UsuarioDb();
        return $bd->getUsuarios();
    }


}