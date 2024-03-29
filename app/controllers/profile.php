<?php
class Profile extends Controller
{
   // this is the Profile Controller for 
   public function index()
   {
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login(true);
      if (is_object($retailerAuthData)) {
         $data['retailerAuthData'] = $retailerAuthData;
      }
      // getting the branch and crioID of the user 
      if ($retailerAuthData->branch == "RGJ") {
         $retailerBranch = 'raiganj';
         $retailerCrioIdis = $retailerAuthData->crioDbRetailerId;
      } else {
      }
      // make sure the business logic is in the services call services appropiately
      $retailerService = $this->load_service('retailerservice');
      if (!$retailerService) {
         throw new Exception("RetailerService class file not found");
      }

      $mostSellingProduct = $retailerService->getMostSellingProduct($retailerCrioIdis);

      $data['mostSellingProduct'] = $mostSellingProduct;


      // Devlopment by Souvik starts

      $salesByBrand = $retailerService->brandWiseProductPurchaseByRetailer($retailerCrioIdis);

      $data['salesByBrand'] = $salesByBrand;
      // show($data['salesByBrand']);
      // die();
      // Devlopment by souvik ends


      $htmlGeneratedLedger = $retailerService->createLedger($retailerCrioIdis); //provide retailer id 
      // show($retailerCrioIdis);
      // die;
      $timeLineData = $retailerService->returnJsonLedgerData($retailerCrioIdis);
      $data['htmlGeneratedLedger'] = $htmlGeneratedLedger;
      $data['timeLineData'] = $timeLineData['transaction'];

      // fetching data from API ends here 
      $data['pageTitle'] = "Profile";
      $this->view("profile", $data);
   }
   // below is the ledger page method
   public function ledger()
   {
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login(true);
      if (is_object($retailerAuthData)) {
         $data['retailerAuthData'] = $retailerAuthData;
      }
      // getting the branch and crioID of the user 
      if ($retailerAuthData->branch == "RGJ") {
         $retailerBranch = 'raiganj';
         $retailerCrioIdis = $retailerAuthData->crioDbRetailerId;
      } else {
      }

      $retailerService = $this->load_service('retailerservice');
      if (!$retailerService) {
         throw new Exception("RetailerService class file not found");
      }
      [$styles, $htmlGeneratedLedger] = $retailerService->createLedger($retailerCrioIdis); //provide retailer id 

      $data['htmlGeneratedLedger'] = $htmlGeneratedLedger;
      $this->view("ledger", $data);
   }
   // below is the orders page
   public function orders(){
      $retailer = $this->load_model('crioretailers');
      $retailerAuthData = $retailer->check_login(true);
      if (is_object($retailerAuthData)) {
         $data['retailerAuthData'] = $retailerAuthData;
      }
      // getting the branch and crioID of the user 
      if ($retailerAuthData->branch == "RGJ") {
         $retailerBranch = 'raiganj';
         $retailerCrioIdis = $retailerAuthData->crioDbRetailerId;
      } else {
      }
      
      // getting all the order and items of orders
      $singleProductDetailsService = $this->load_service('singleproductservice');
      $orderPlacedAndItems = $singleProductDetailsService->getOrdersForUser($_SESSION['user_url']);

      $data['orders'] = $orderPlacedAndItems;
      // show($orderPlacedAndItems);
      // die;
      $this->view("orders", $data);
   }
}
