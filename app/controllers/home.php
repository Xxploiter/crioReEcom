<?php 
class Home extends Controller{

   public function index(){ 
      
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login();
      // retailerAuthData contains an array if user exist and false if no user exist   
      if(is_object($retailerAuthData)){
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page

         $data['retailerAuthData'] = $retailerAuthData;
      }
    $data['pageTitle'] = "Home | Crio-Re";
       $this->view("index",$data);

    }
}



?>