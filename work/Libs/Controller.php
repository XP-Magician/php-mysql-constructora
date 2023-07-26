<?php
class Controller
{

        public function cargaVistas($vista, $datos=[]){
           $ruta= $_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Views/'.$vista.'.php';
            if(file_exists( $ruta)){
                $array=$datos;
                require_once ($ruta);
           }else{
               die("La vista: ".$ruta." no existe!!!");
            }
        }

        public function resultadoOperacion($vista){
            $ruta= $_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Views/estaticas/'.$vista.'.php';
             if(file_exists( $ruta)){
                 require_once ($ruta);
            }else{
                die("La vista: ".$ruta." no existe!!!");
             }
         }

    public function cargaModelo($modelo, $datos=[]){
        $ruta= $_SERVER['DOCUMENT_ROOT'].'/DiegoFabrega_TrabajoWeb/work/Model/'.$modelo.'.php';
        if(file_exists( $ruta)){
            $array=$datos;
            require_once ($ruta);
        }else{
            die("El modelo: ".$ruta." no existe!!!");
        }
    }

}