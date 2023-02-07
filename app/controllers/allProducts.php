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
// TODO fetch the allproducts data from the API provided here 
// $api_url = 'https://dummy.restapiexample.com/api/v1/employees'; // put the retaillers all data url here

// // Read JSON file
// $json_data = file_get_contents($api_url);

// // Decode JSON data into PHP array
// $response_data = json_decode($json_data);

// // All user data exists in 'data' object
// $user_data = $response_data->data;

// // Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data, 0, 9);


// // Print data if need to debug
// print_r($user_data);
// TODO fetch all the images from the API as well 
// API data ends here
    $data['productsMainSection'] = $productsMainSection; //this has the images
       $this->view("allProducts",$data);

    }
}
