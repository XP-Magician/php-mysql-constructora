<?php
//require_once("../work/Model/EmpleoDb.php");

class EmpleoController extends Controller
{
    public function index(){
        $this->cargaVistas("empleo");
    }

    public function addEmpleo(){
        $this->cargaModelo("EmpleoDb");
        if (isset($_POST["Nombre"])){
            $bd = new EmpleoDb();
            $n=$_POST["Nombre"];
            if (!$bd->siExiste($n)){
                $bd->addEmpleo($n);
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

    public function getEmpleos(){
        $this->cargaModelo("EmpleoDb");
        $base = new EmpleoDb();
        return $base->getEmpleos();
    }

}