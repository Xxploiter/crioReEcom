<?php 
// this App class will be responsible for running the whole application
class App{
    protected $controller = "home";
    protected $method = "index";
    protected $params;
// above is the default url config if there is nothing in the url these will be the default values

private function parseURL(){
    // $_GET['url'] is getting the value of the url from the configuration that we made in the .htaccess file
    // the key, url in the super variable $_GET is configured in the htaccess
    $url = isset($_GET['url']) ? $_GET['url'] : "home";
    return explode('/', filter_var(trim($url,'/'),FILTER_SANITIZE_URL));            
}

   public function __construct()
    {
        $url = $this->parseURL();
        // show() is the helper function that i created to visualize the data properly
 
        if(file_exists("../app/controllers/".strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
      
        // above if statement is checking for the first param in the url if found, getting its respective controller and unsetting its value in the url[] array
        require "../app/controllers/". $this->controller .".php";
        // now we using dynamic variable to instantiate the controller class
        $this->controller = new $this->controller;
        // now below if statement is used to extract out the next param (method) from the url if it exists then we use it to call the method of the respective class and unset it
        if(isset($url[1])){
            $url[1] = strtolower($url[1]);
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // now we will use function array_values() to get the rest of the param from the url and assign it to the protected variable param
        $this->params = (count($url)>0)? array_values($url) : ['home'];
        // show($this->params);
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    
}
?>