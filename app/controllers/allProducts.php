<?php 
class AllProducts extends Controller{

   public function index(){ 
      
      $retailer = $this->load_model('crioretailers');
      $imageProcessingClass = $this->load_model('Image');
      $retailerAuthData = $retailer->check_login();
      // retailerAuthData contains an array if user exist and false if no user exist   
      if(is_object($retailerAuthData)){
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page

         $data['retailerAuthData'] = $retailerAuthData;
      }

      $db = Database::newInstance();
      $productsMainSection = $db->read("SELECT * FROM products");

    $data['pageTitle'] = "All Products | Crio-Re";
    if ($productsMainSection) {
      foreach($productsMainSection as $singleProduct => $images){
         $productsMainSection[$singleProduct]->image1 = $imageProcessingClass->get_thumb_post($productsMainSection[$singleProduct]->image1); //doing this for only the first image as one img is needed for showing in home page our first image is image1
      }
    }
    $data['productsMainSection'] = $productsMainSection;
       $this->view("allProducts",$data);

    }
}
