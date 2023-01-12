<?php 
class Profile extends Controller{
// this is the Profile Controller for 
   public function index(){ 
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login(true); 
      if(is_object($retailerAuthData)){
         $data['retailerAuthData'] = $retailerAuthData;
      }
// TODO Here temporary call will be made to the API to fetch the retailers data from rishis API 
// Later models should be made for this as its dealing with data
$api_url = 'https://raiganj.crio77.com/api/retailer.php?id=1'; // put the retaillers all data url here

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// show($response_data[0]);
// die();
// All user data exists in 'data' object
// $user_data = $response_data->data;

// // Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data, 0, 9);

// // Print data if need to debug
// print_r($user_data);


// fetching data from API ends here 
    $data['pageTitle'] = "Profile";
       $this->view("profile",$data);

    }
}



?>