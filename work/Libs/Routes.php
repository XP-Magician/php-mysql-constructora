<?php
class Routes{
    protected $controlActual='HomeController';
    protected $metodoActual='index';
    protected $parametros=[];
    public function __construct()
    {
        $url=$this->getUrl();
        $aux=$url;
        if(file_exists('../work/Controller/'.ucwords($url[0]).'Controller.php')){
            $this->controlActual=ucwords($url[0]."Controller");
            unset($url[0]);
        }

        require_once ('../work/Controller/'.$this->controlActual.'.php');

        $this->controlActual=new $this->controlActual;
        if(isset($url[1])){
            if(method_exists($this->controlActual,$url[1])){
                $this->metodoActual=$url[1];
                unset($url[1]);
            }
        }
        $this->parametros=$url ? array_values($url):[];
        call_user_func_array([$this->controlActual,$this->metodoActual],$this->parametros);

    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            if (count($url)>2){
              $pos=count($url)-1;
              $aux=[
                  0=>$url[$pos-1],
                  1=>$url[$pos]
              ];
              return $aux;
            }
            return($url);
        }
        return [0=>1];
    }
}