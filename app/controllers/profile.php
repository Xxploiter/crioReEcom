<?php 
class Profile extends Controller{
// this is the Profile Controller for 
   public function index(){ 
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login(true); 
      if(is_object($retailerAuthData)){
         $data['retailerAuthData'] = $retailerAuthData;
      }
    $data['pageTitle'] = "Profile";
       $this->view("profile",$data);

    }
}



?>