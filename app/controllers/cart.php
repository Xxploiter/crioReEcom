<?php 
class Cart extends Controller{

   public function index(){ 
      
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login();
      // retailerAuthData contains an array if user exist and false if no user exist   
      if(is_object($retailerAuthData)){
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page
         $data['retailerAuthData'] = $retailerAuthData;
      }

      $db = Database::newInstance();
      $cartAllProductDetails = false;
      $productIdsInCart = array();
      if(isset($_SESSION['CART'])){
        $productIdsInCart = array_column($_SESSION['CART'], 'id');
        $idsForQuery = "'". implode("','",$productIdsInCart) . "'";

        $cartAllProductDetails = $db->read("SELECT * FROM products WHERE id in ($idsForQuery)");
      
      }
      // in the below nested foreach i am adding the cart qty field to the data that i got from the db 
   if(is_array($cartAllProductDetails)){ //is array true means we got the data from the db
      foreach($cartAllProductDetails as $cartSingleProdDetails => $details){
         foreach ($_SESSION['CART'] as $products) {
            if($details->id == $products['id']){
               $cartAllProductDetails[$cartSingleProdDetails]->cartQty = $products['qty'];
               break;
            }
         }     
        }
   }
    $data['cartAllProductDetails'] = $cartAllProductDetails;
       $this->view("cart",$data);

    }
}
