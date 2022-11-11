<?php 
class Login extends Controller{

   public function index(){ 
    $data['pageTitle'] = "Login | Crio-Re";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         // show($_POST);
         $crioretailers=$this->load_model("Crioretailers");
         // here we are passing the super global $POST to the sign in 
         $crioretailers->login($_POST);
    }

       $this->view("login",$data);
    }
}



?>