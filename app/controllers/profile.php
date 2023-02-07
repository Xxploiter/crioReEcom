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

      $data['htmlGeneratedLedger'] = $htmlGeneratedLedger;
      $data['timeLineData'] = $timeLineData['transaction'];
      // show($data['timeLineData']);
      // die;

      // //TODO Here fetch all the apis needed for demographic/graphs
      // // demographic/graphs ends here IMP
      // // IMP Later models should be made for this as its dealing with data
      // $retailerInfoFromCrio = 'https://'.$retailerBranch.'.crio77.com/api/retailer.php?id='.$retailerCrioIdis; // put the retaillers all data url here
      // $ordersRetailer = 'https://'.$retailerBranch.'.crio77.com/api/orderInfo.php?id='.$retailerCrioIdis; // put the retaillers all data url here
      // // the ledger api
      // $ledgerRetailer='https://raiganj.crio77.com/api/ledger.php?id=1';

      // // Read JSON file
      // $json_data_retailerInfoFromCrio = file_get_contents($retailerInfoFromCrio);
      // // getting the orders data of the retailer
      // $json_data_ordersRetailer = file_get_contents($ordersRetailer);
      // $json_data_ledgerRetailer = file_get_contents($ledgerRetailer);


      // // Decode JSON data into PHP array
      // $response_data_retailerInfoFromCrio = json_decode($json_data_retailerInfoFromCrio);
      // $response_data_ledgerRetailer = json_decode($json_data_ledgerRetailer);

      // show($response_data_ledgerRetailer->orderInfo);
      // die();

      // fetching data from API ends here 
      $data['pageTitle'] = "Profile";
      $this->view("profile", $data);
   }
}
