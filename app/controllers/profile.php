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
      $htmlGeneratedLedger = $retailerService->createLedger(3); //provide retailer id 

      $timeLineData = $retailerService->returnJsonLedgerData(3);

      $mostSellingProduct = $retailerService->getMostSellingProduct($retailerCrioIdis);

      $data['mostSellingProduct'] = $mostSellingProduct;

      $data['htmlGeneratedLedger'] = $htmlGeneratedLedger;
      $data['timeLineData'] = $timeLineData['transaction'];

      // fetching data from API ends here 
      $data['pageTitle'] = "Profile";
      $this->view("profile", $data);
   }
}
