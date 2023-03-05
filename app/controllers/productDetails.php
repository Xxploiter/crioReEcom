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
     
      // gettin unique colors and sizes from the API
      [$availableColors, $availableSizes] = $singleProductDetailsService->getUniqueColorAndSize($productCrioId);
      
      // below calling the service for total available items no matter color and size
      $availableQuantityOfItem = $singleProductDetailsService->getQuantityFromInventoryByItemIdColorIdSizeId($productCrioId);
      
      // now making sure if the items variants or if a single item are actuallyy available in the inventory
      // if the available size and color is empty then fetching all the colors and size from the database
      if($availableSizes && $availableColors){
         $data['availableSizes'] = $availableSizes;
         $data['availableColors'] = $availableColors;
      }else{
         // if there is no variants in crios inventory fetching all the colors and sizes from our database
         // make sure to pass array of objects into the variable
        [$data['availableColorsDb'], $data['availableSizesDb']] = $singleProductDetailsService->getAllColorsSizesFromDb();
      //   show($data['availableSizesDb']);
      //   die;
      }
      $data['availableQuantityOfItem'] = is_string($availableQuantityOfItem)? 'productNotAvailable' : $availableQuantityOfItem;
     
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
