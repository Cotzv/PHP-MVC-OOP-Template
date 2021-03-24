<?php 
class View{

    protected $view_file;
    protected $view_data;

    public function __construct($view_file,$view_data){

        $this->view_file = $view_file;
        $this->view_data = $view_data;
    }

    public function render(){
        if(file_exists(VIEW . $this->view_file . '.phtml')){
            include VIEW . $this->view_file . '.phtml';
        }
    }

    public function getAction(){
        return (explode('/',$this->view_file)[1]);
    }

    public function getPage(){
        return (explode('/',$this->view_file)[0]);
    }

    public function getData(){
        return $this->view_data;
    }

}