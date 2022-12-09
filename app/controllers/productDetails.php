<?php 
class ProductDetails extends Controller{
//if we go back to the core app file we have configured each methhod to be called with 
// arguments
//those arguments are the url 
   public function index($slag){
      $slag = esc($slag); 
      
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login();
      // retailerAuthData contains an array if user exist and false if no user exist   
      if(is_object($retailerAuthData)){
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page

         $data['retailerAuthData'] = $retailerAuthData;
      }

      $db = Database::newInstance();
      $singleProductDetails = $db->read("SELECT * FROM products WHERE slag = :slag", ['slag'=>$slag]); //adding the slag toan array as key value remember that we are using pdo and data needs to be in key value format 

    $data['pageTitle'] = "Product Details | Crio-Re";
    $data['singleProductDetails'] = $singleProductDetails[0] ?? false;
       $this->view("productDetails",$data);

    }
}



?>