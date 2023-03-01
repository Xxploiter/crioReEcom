<?php
class ProductDetails extends Controller
{
   //if we go back to the core app file we have configured each methhod to be called with 
   // arguments
   //those arguments are the url 
   public function index($id)
   {
      $id = $id;


      $retailer = $this->load_model('crioretailers');


      $retailerAuthData = $retailer->check_login();
      $db = Database::newInstance();
      $singleProductDetails = $db->read("SELECT * FROM products WHERE id = :id", ['id' => $id]); //adding the slag toan array as key value remember that we are using pdo and data needs to be in key value format 

      $singleProductDetailsService = $this->load_service('singleproductservice');

      $productCrioId = $singleProductDetails[0]->crioId;
      // show($productCrioId);
      // die;
      // gettin unique colors and sizes from the API
      [$availableColors, $availableSizes] = $singleProductDetailsService->getUniqueColorAndSize($productCrioId);

      $data['availableSizes'] = $availableSizes;
      $data['availableColors'] = $availableColors;
      // show($data['availableSizes']);
      // show($data['availableColors']);
      // die;
      // retailerAuthData contains an array if user exist and false if no user exist   
      if (is_object($retailerAuthData)) {
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page

         $data['retailerAuthData'] = $retailerAuthData;
      }



      $data['pageTitle'] = "Product Details | Crio-Re";
      $data['singleProductDetails'] = $singleProductDetails[0] ?? false;
      $this->view("productDetails", $data);
   }
}
