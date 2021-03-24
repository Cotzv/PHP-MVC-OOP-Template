<?php
class car {

    protected static $data_file;
    protected $inventory = [];

    public function __construct(){
        
        self::$data_file = DATA.'cars.txt';
    }

    private function load(){
        if(file_exists(DATA.'cars.txt')){
            $this->inventory = file(DATA.'cars.txt');
        }
    }

    public function getCars(){
        $this->load();
        return $this->inventory;
    }
}