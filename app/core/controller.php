<?php 

// this here controller file will have all the functionality a controller might have so
// if we need any new function in the conmtrollers we will add the functionality here then extend this class <we are using this as a Blueprint IMP>

class Controller{

    public function view($path,$data=[]){
        extract($data);
    $fileName = "../app/views/".THEME.$path.".php";
        if(file_exists($fileName)){
            include $fileName;          
        }else{    
            include "../app/views/".THEME."404.php";
        }
    }
    public function viewAdmin($path,$data=[]){
        extract($data);
        $AdminfileName = "../app/views/".ADMIN_THEME.$path.".php";
        if(file_exists($AdminfileName)){ 
            // show($AdminfileName);
            // die; 
            include $AdminfileName;
        }else{
          
            include "../app/views/".ADMIN_THEME."404.php";
        }
    }

    public function load_model($model){

        if(file_exists("../app/models/".strtolower($model).".class.php")){
            include "../app/models/".strtolower($model).".class.php";
            return $a = new $model();
        }else{
         return false;
        }
    }

    
}



?>