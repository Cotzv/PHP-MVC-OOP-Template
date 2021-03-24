<?php
class carController extends Controller{

    public function home(){
        
        $this->model('car');
        $this->view('car'.DIRECTORY_SEPARATOR.'home',['cars' => $this->model->getCars()]);
        $this->view->render();
    }
}