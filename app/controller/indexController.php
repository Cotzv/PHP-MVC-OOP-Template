<?php
class indexController extends Controller{

    public function home($name=''){
        //echo 'I am in: '.__CLASS__.' method '.__METHOD__;
        //echo '$Id: '.$id.' & Name: '.$name;
        $this->view('index'. DIRECTORY_SEPARATOR .'home',[
            'name' => $name,
        ]);
        $this->view->render();
    }
}