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
      // Below all the data fetching can be done for the catagories page 
      // here fetching all the categories for the catagory page all the rows which willl go inside table body 
      $db = Database::newInstance();
      $categories = $db->read("SELECT * FROM categories ORDER BY id DESC");
      // below reading for using it in the select option html element
      $categoryListEle = $db->read("SELECT * FROM categories WHERE disabled = 0 ORDER BY id DESC");
      $data['categoryListEle'] = $categoryListEle;
      $category = $this->load_model("Category");
      $cataRows = $category->make_table($categories);
      
      $data['cataRows'] = $cataRows;
      // fetching catagories ending here
    $data['pageTitle'] = "Admin | Crio-Re";
       $this->viewAdmin("categories",$data);

    }
   public function products(){ 
      
      $retailer = $this->load_model('crioretailers');

      $retailerAuthData = $retailer->check_login(true, ['admin']); 
         // the check_login() function is in crioRetailers.class.php
         // retailerAuthData contains an array if user exist and false if no user exist and true is passes then the user is redirected to the login page
      if(is_object($retailerAuthData)){             
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page
         $data['retailerAuthData'] = $retailerAuthData;
      }
      // Below all the data fetching can be done for the catagories page 
      // here fetching all the categories for the catagory page all the rows which willl go inside table body 
      $db = Database::newInstance();
      $products = $db->read("SELECT * FROM products ORDER BY id DESC");
      $categoryListEle = $db->read("SELECT * FROM categories WHERE disabled = 0 ORDER BY id DESC");
      $product = $this->load_model("Product");
      // below we are loading the category class as we need respective category of the ids by calling a function
      $CategoryClass = $this->load_model("Category");
      // passing the above class into the function make_table
      $productRows = $product->make_table($products, $CategoryClass);
      
      $data['productRows'] = $productRows;
      $data['categoryListEle'] = $categoryListEle;
      // fetching catagories ending here
    $data['pageTitle'] = "Admin | Crio-Re";
       $this->viewAdmin("products",$data);

    }
    public function addRetailer(){

      $retailer = $this->load_model('crioretailers');

      $retailerAuthData = $retailer->check_login(true, ['admin']); 
         // the check_login() function is in crioRetailers.class.php
         // retailerAuthData contains an array if user exist and false if no user exist and true is passes then the user is redirected to the login page
      if(is_object($retailerAuthData)){             
         // here if needed i can write code to unable users to enter the site 
         // if theyy dont have an account if no acc then simply redirect the control to the login page
         $data['retailerAuthData'] = $retailerAuthData;
      }

      // later during refactoring make sure to create a model for the api fetching 
      // TODO Here temporary call will be made to the API to fetch the retailers data from rishis API 
// Later models should be made for this as its dealing with data
$api_url = 'https://raiganj.crio77.com/api/retailer.php'; // put the retaillers all data url here

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$allRetailersApiData = json_decode($json_data);

// show($allRetailersApiData);
$data['allRetailersApiData'] = $allRetailersApiData;
// All user data exists in 'data' object
// $user_data = $response_data->data;

// // Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data, 0, 9);

// // Print data if need to debug
// print_r($user_data);


// fetching data from API ends here 
      // api fetching ends here
      $data['pageTitle'] = "Admin | Crio-Re";
      $this->viewAdmin("addRetailer",$data);
    }

}
