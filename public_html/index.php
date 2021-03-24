<?php 

define('ROOT' , dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('VIEW' , ROOT . 'app' . DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('MODEL' , ROOT . 'app' . DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
define('DATA' , ROOT . 'app' . DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR);
define('CORE' , ROOT . 'app' . DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR);
define('CONTROLLER' , ROOT . 'app' . DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);

class Index {
    
    private $module = [VIEW,MODEL,DATA,CORE,CONTROLLER];
   
    public function __construct(){

        $this->includes();
        new Application;
    }

    private function includes(){

        try{

            //Starts searching for files at the folders
            foreach($this->module as $path){

                //Exclude MODEL y APP folders
                if ($path != MODEL){

                // Include all php files
                    foreach(glob($path.'*.php') as $file) {

                        include $file;
                    }
                }
            }
        }
        catch(exception $e){ }
    }

}

new Index;