<?php 
class Signup extends Controller{
//IMP few methods are inherited from the controller class open it side by side for clearity
   public function index(){ 
    $data['pageTitle'] = "Signup | Crio-Re";
   //  above is the $data[] array that is used to send any data to the respective views


      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         // show($_POST);
         $crioretailers=$this->load_model("Crioretailers");
         // here we are passing the super global $POST to the 
         $crioretailers->signup($_POST);
      }
      // the view method calls the html page and the control stays in this controller itself
       $this->view("signup",$data);
    }
}



?>