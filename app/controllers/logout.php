<?php 
class Logout extends Controller{

   public function index(){ 
      
      $retailer = $this->load_model('crioretailers');
      $retailer->logout();

    }
}



?>