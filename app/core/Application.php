<?php
class Application {
    
    protected $controller='indexController';
    protected $action='home';
    protected $data=[];

    public function __construct(){
        
        $this->URL();
        //echo $this->controller, '<br>' , $this->action , '<br>' , print_r($this->data);
        if(file_exists(CONTROLLER. DIRECTORY_SEPARATOR . $this->controller . '.php')){
            $this->controller = new $this->controller;
            if(method_exists($this->controller,$this->action)){
                call_user_func_array([$this->controller,$this->action],$this->data);
            }
        }
    }

    protected function URL(){

        $request = trim($_SERVER['REQUEST_URI'],'/');

        if(!empty($request)){

            $url = explode('/',$request);
            $this->controller = isset($url[0]) 
                ? $url[0].'Controller'
                : 'indexController';
            $this->action = isset($url[1]) 
                ? $url[1]
                : 'home';
            unset($url[0],$url[1]);
            $this->data = !empty($url)
                ? array_values($url)
                : [];
        }
    }
}