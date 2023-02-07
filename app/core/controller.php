<?php

// this here controller file will have all the functionality a controller might have so
// if we need any new function in the conmtrollers we will add the functionality here then extend this class <we are using this as a Blueprint IMP>
// IMP always remeber the first value in the link/url is the controller the second will be the method and the third is the argument to the method 
// or can be anything example if the url is  :- addToCart/removeItemCart/id then the controller is addToCart there supposed to be a method name removeItemCart and the id is the extra parameter we can take as many param as we want in the url but first two places
// is for controller and the method respectively 
class Controller
{

    public function view($path, $data = [])
    {
        if (is_array($data)) {
            extract($data);
        }
        $fileName = "../app/views/" . THEME . $path . ".php";
        if (file_exists($fileName)) {
            include $fileName;
        } else {
            include "../app/views/" . THEME . "404.php";
        }
    }
    public function viewAdmin($path, $data = [])
    {
        if (is_array($data)) {
            extract($data);
        }
        $AdminfileName = "../app/views/" . ADMIN_THEME . $path . ".php";
        if (file_exists($AdminfileName)) {
            // show($AdminfileName);
            // die; 
            include $AdminfileName;
        } else {

            include "../app/views/" . ADMIN_THEME . "404.php";
        }
    }

    public function load_model($model)
    {

        if (file_exists("../app/models/" . strtolower($model) . ".class.php")) {
            include "../app/models/" . strtolower($model) . ".class.php";
            return $a = new $model();
        } else {
            return false;
        }
    }
    // method for loading the service class
    public function load_service($serviceType)
    {   
        require_once ('../app/services/serviceFactory.class.php');
        $service = ServiceFactory::createService($serviceType); //this is the factory class
        if ($service === false) {
            return false;
        } else {
            return $service;
        }
    }

}