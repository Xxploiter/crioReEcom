<?php 
class Home extends Controller{

   public function index($params){ 
      is_numeric($params)? $pageNo = $params : $pageNo = 1;
      // die;
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

      $paginationServive = $this->load_service('paginationservice');
      $paginationData = $paginationServive->getItemsPaginated($db,"SELECT * FROM products", $pageNo);
      // $productsMainSection = $db->read("SELECT * FROM products");
      $productsMainSection = $paginationData['items'];
    $data['pageTitle'] = "Home | Crio-Re";
    if ($productsMainSection) {
      foreach($productsMainSection as $singleProduct => $images){
         if(isset( $productsMainSection[$singleProduct]->image1)){
            $productsMainSection[$singleProduct]->image1 = $imageProcessingClass->get_thumb_post($productsMainSection[$singleProduct]->image1); //doing this for only the first image as one img is needed for showing in home page our first image is image1
         }
      }
    }
    $data['productsMainSection'] = $productsMainSection;
       $this->view("index",$data);

    }
}
