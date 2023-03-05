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
   public function ledger(){
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
      [$styles,$htmlGeneratedLedger] = $retailerService->createLedger($retailerCrioIdis); //provide retailer id 

      $data['htmlGeneratedLedger'] = $htmlGeneratedLedger;
      $this->view("ledger", $data);
   }
}
