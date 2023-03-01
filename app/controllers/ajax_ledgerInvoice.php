<?php 
class Ajax_ledgerInvoice extends Controller{
// As it has extended the controller class it has access to services IMP
   public function index(){ 

    if(count($_POST)>0){
        $data = (object)$_POST;
    }else{
        $data = json_decode(file_get_contents('php://input'));
    }

    if(is_object($data) && isset($data->data_type)){
       
        if($data->data_type == 'invoice'){ 
            $retailerService = $this->load_service('retailerservice');
            $invoiceId = $data->invoiceData;
            [$style, $invoice, $orderInfo, $shopInfo, $payInfo, $deliveryInfo] = $retailerService->createInvoice($invoiceId);
        // Get the invoice data here TODO
        // Build the invoice and return the build html css
        
        $arr['style'] = $style;
        $arr['invoice'] = $invoice;
        $arr['orderInfo'] = $orderInfo;
        $arr['shopInfo'] = $shopInfo;
        $arr['payInfo'] = $payInfo;
        $arr['deliveryInfo'] = $deliveryInfo;

         echo json_encode($arr);
       
         }
       
        
    }

   }
}

?>