<?php
class HomeController extends Controller
{
    public function index(){
        $this->cargaVistas("estaticas/cabecera"); //
        $this->cargaVistas("home",null);
    }

    public function registros(){
    // cargo controladores y los creo
        $this->cargaControlador("Cliente");
        $this->cargaControlador("Empleado");
        $this->cargaControlador("Empleo");
        $this->cargaControlador("Obra");
        $this->cargaControlador("Usuario");
        $this->cargaControlador("Vehiculo");

        $cli = new ClienteController();
        $emp = new EmpleadoController();
        $ob = new ObraController();
        $us = new UsuarioController();
        $emple = new EmpleoController();
        $ve= new VehiculoController();
    // creo array con los datos que ellos contienen
        $array=[
            "clientes"=>$cli->getClientes(),
            "empleados"=>$emp->getEmpleados(),
            "empleos"=>$emple->getEmpleos(),
            "obras"=>$ob->getObras(),
            "usuarios"=>$us->getUsuarios(),
            "vehiculos"=>$ve->getVehiculos()
        ];
    // lo envio a la vista para que los descifre
        $this->cargaVistas("registros",$array);

    }

    private function cargaControlador($controlador){
            $ruta= $_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Controller/'.$controlador.'Controller.php';
             if(file_exists( $ruta)){
                 require_once ($ruta);
            }else{
                die("El controlador: ".$ruta." no existe!!!");
             }
    }

}