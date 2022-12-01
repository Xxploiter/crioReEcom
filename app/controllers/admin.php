<?php 
class Admin extends Controller{

   public function index(){ 
      
      $retailer = $this->load_model('crioretailers');

      $retailerAuthData = $retailer->check_login(true, ['admin']); 
         // the check_login() function is in crioRetailers.class.php
         // retailerAuthData contains an array if user exist and false if no user exist and true is passes then the user is redirected to the login page
      if(is_object($retailerAuthData)){
              
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page
         $data['retailerAuthData'] = $retailerAuthData;
      }
    $data['pageTitle'] = "Admin | Crio-Re";
       $this->viewAdmin("index",$data);

    }
   public function categories(){ 
      
      $retailer = $this->load_model('crioretailers');

      $retailerAuthData = $retailer->check_login(true, ['admin']); 
         // the check_login() function is in crioRetailers.class.php
         // retailerAuthData contains an array if user exist and false if no user exist and true is passes then the user is redirected to the login page
      if(is_object($retailerAuthData)){
              
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page
         $data['retailerAuthData'] = $retailerAuthData;
      }
    $data['pageTitle'] = "Admin | Crio-Re";
       $this->viewAdmin("categories",$data);

    }
}



?>