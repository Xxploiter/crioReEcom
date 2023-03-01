<?php
include_once '../app/Cache/cacheHandler.php';
class RetailerService
{
  // about the getLedgerDataFromAPI function this gets data from the api the cache time is one day
  private function getLedgerDataFromAPI($retailerId)
  {

    $data = cacheHandler::getRetailerDataFromCacheOrAPI('ledger_data', 'https://raiganj.crio77.com/api/ledger_data.php?id=' . $retailerId, 60 * 60 * 24, $retailerId);
    return $data;
  }
  private function getInvoiceDataFromAPI($invoiceId)
  {
    $apiData = file_get_contents('https://raiganj.crio77.com/api/invoice.php?id=' . $invoiceId);
    // Perform data processing, if necessary
    $processedInvoiceData = json_decode($apiData, true);
    return $processedInvoiceData;
  }

  public function returnJsonLedgerData($retailerId)
  {
    $data = cacheHandler::getRetailerDataFromCacheOrAPI('ledger_data', 'https://raiganj.crio77.com/api/ledger_data.php?id=' . $retailerId, 60 * 60 * 24, $retailerId);
    return $data;
  }

  public function createLedger($retailerId)
  {
    $ledgerData = $this->getLedgerDataFromAPI($retailerId);
    // show($ledgerData->transaction);
    // die;
    $transactions = $ledgerData['transaction'];
    // Initialize variables for ledger
    $balance = 0;
    $ledger = '';
    $ledger .= '
                <!-- begin table-responsive -->
                <div class="table-responsive">
                   <table class="table table-invoice">
                      <thead class="thead-dark">
                         <tr>
                            <th style="border-top-left-radius: 20px 20px;">DATE</th>
                            <th class="text-center">PARTICULARS</th>
                            <th class="text-center">CREDIT</th>
                            <th class="text-center">DEBIT</th>
                            <th class="text-right" style="border-top-right-radius: 20px 20px;">BALANCE</th>
                         </tr>
                      </thead>
                      <tbody>';

    foreach ($transactions as $transaction) {

      if ($transaction['transactionType'] === 'pay') {
        $ledger .= '<tr>';
        $ledger .= '<td>' . $transaction['dateIs'] . '</td>';
        if ($transaction["payVia"] == "Bank of CriO") {
          $payVia = "NEFT";
        } elseif ($transaction["payVia"] == "Bank of reciever") {
          $payVia = "UPI";
        } elseif ($transaction["payVia"] == "cash") {
          $payVia = "cash";
        } elseif ($transaction["payVia"] == "PDC") {
          $payVia = "PDC";
        }
        // particulars here is a custom string made up of some keywords related to CriO
        $particulars = $payVia . '-' . $transaction["orderId"];
        $ledger .= '<td  class="text-center">' . $particulars . '</td>';
        $balance -= $transaction['amountIs'];
        $ledger .= '<td class="text-center">-</td>';
        $ledger .= '<td class="text-center">' . $transaction['amountIs'] . '</td>';
        $ledger .= '<td class="text-right">' . $balance . '</td>';
        $ledger .= '</tr>';
        // now checking wether there was a discount made while payment if true generating a discount row wit a different particulars value
        if ($transaction['transactionType'] === 'pay' & intval($transaction['payDiscount']) > 0) {
          $ledger .= '<tr>';
          $ledger .= '<td>' . $transaction['dateIs'] . '</td>';
          // starting discount
          $payVia = "DISC";
          $particulars = $payVia . '-' . $transaction["orderId"];
          $ledger .= '<td  class="text-center">' . $particulars . '</td>';
          $balance -= $transaction['payDiscount'];
          $ledger .= '<td class="text-center">-</td>';
          $ledger .= '<td class="text-center">' . $transaction['payDiscount'] . '</td>';
          // ending discount
          $ledger .= '<td class="text-right">' . $balance . '</td>';
          $ledger .= '</tr>';
        }
      } else if ($transaction['transactionType'] === 'order'){
        // the control moves here when transaction type is order
        $ledger .= '<tr>';
        $ledger .= '<td>' . $transaction['dateIs'] . '</td>';
        $balance += $transaction['amountIs'];
        $formatted_date = date("my", strtotime($transaction["dateIs"]));
        $number_of_digits = strlen((string)$transaction["orderId"]);
        if ($number_of_digits == 3) {
          $endNumber = '0' . $transaction["orderId"];
        } elseif ($number_of_digits == 2) {
          $endNumber = '00' . $transaction["orderId"];
        } elseif ($number_of_digits == 1) {
          $endNumber = '000' . $transaction["orderId"];
        }
        $particulars = 'CF/' . $formatted_date . '/INV' . $endNumber;
        $ledger .= '<td  class="text-center">' . $particulars . '</td>';
        $ledger .= '<td class="text-center">' . $transaction['amountIs'] . '</td>';
        $ledger .= '<td class="text-center">-</td>';
        $ledger .= '<td class="text-right">' . $balance . '</td>';
        $ledger .= '</tr>';
      }
    }

    $ledger .= '</tbody>

   <thead class="thead-dark">
    <tr>
       <th style="border-bottom-left-radius: 20px 20px;">FROM</th>
       <th class="text-center">TO</th>
       <th class="text-center">NO. BILLS</th>
 
       <th class="text-right" colspan="2" style="border-bottom-right-radius: 20px 20px;">CLOSING
          BALANCE: ' . $balance . '</th>
    </tr>
   </thead>
 </table>';
  <thead class="thead-dark">
   <tr>
      <th style="border-bottom-left-radius: 20px 20px;">FROM</th>
      <th class="text-center">TO</th>
      <th class="text-center">NO. BILLS</th>

      <th class="text-right" colspan="2" style="border-bottom-right-radius: 20px 20px;">CLOSING
         BALANCE: ' . $balance . '</th>
   </tr>
  </thead>
</table>';
    $style = '
<style type="text/css">
body {
   margin-top: 20px;
   background: #eee;
}

.bg-img {
   position: absolute;
   width: 39rem;
   margin-left: 215px;
   /* margin-bottom: 122px; */
   bottom: 13rem;
}

.ledgerheader {
   width: -webkit-fill-available;
   position: inherit;
   bottom: 70px;
}

.footerImg {
   width: -webkit-fill-available;
}

.invoice {
   background: #fff;
   padding: 20px;
   position: relative;

}

.invoice-company {
   font-size: 20px
}

.invoice-header {
   margin: 0 -20px;
   background: white;
   padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
   display: table-cell;
   width: 1%
}

.invoice-from,
.invoice-to {
   padding-right: 20px;
   font-size: 20px;
   width: 50%;
   position: absolute;
   bottom: 57rem;
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
   font-size: 16px;
   font-weight: 600
}

.invoice-date {
   text-align: right;
   padding-left: 20px
}

.invoice-price {
   background: #f0f3f4;
   display: table;
   width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
   display: table-cell;
   padding: 20px;
   font-size: 20px;
   font-weight: 600;
   width: 75%;
   position: relative;
   vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
   display: table-cell;
   vertical-align: middle;
   padding: 0 20px
}

.invoice-price small {
   font-size: 12px;
   font-weight: 400;
   display: block
}

.invoice-price .invoice-price-row {
   display: table;
   float: left
}

.invoice-price .invoice-price-right {
   width: 25%;
   background: #2d353c;
   color: #fff;
   font-size: 28px;
   text-align: right;
   vertical-align: bottom;
   font-weight: 300
}

.invoice-price .invoice-price-right small {
   display: block;
   opacity: .6;
   position: absolute;
   top: 10px;
   left: 10px;
   font-size: 12px
}

.invoice-footer {
   border-top: 1px solid #ddd;
   padding-top: 10px;
   font-size: 10px
}

.invoice-note {
   color: #999;
   margin-top: 80px;
   font-size: 85%
}

.invoice>div:not(.invoice-footer) {
   margin-bottom: 172px;


}

.btn.btn-white,
.btn.btn-white.disabled,
.btn.btn-white.disabled:focus,
.btn.btn-white.disabled:hover,
.btn.btn-white[disabled],
.btn.btn-white[disabled]:focus,
.btn.btn-white[disabled]:hover {
   color: #2d353c;
   background: #fff;
   border-color: #d9dfe3;
}

.table .thead-dark th {
   border: none;
   background-color: #015349;
}
</style>
';

    return array($style, $ledger);
  }

  public function createInvoice($invoiceId)
  {
    $invoiceData = $this->getInvoiceDataFromAPI($invoiceId);
    // show($invoiceData->transaction);
    // die;
    $orderInfo = $invoiceData['orderInfo'];
    $shopInfo = $invoiceData['shopInfo'];
    $payInfo = $invoiceData['payInfo'];
    $deliveryInfo = $invoiceData['deliveryInfo'];

    $orderedProducts = $invoiceData['orderedProducts'];
    $normOrderedProducts = $invoiceData['normOrderedProducts'];
    
    if (!empty($orderedProducts) && !empty($normOrderedProducts)) {
      $allProducts = array_merge($orderedProducts, $normOrderedProducts);
    } else {
      $allProducts = !empty($orderedProducts) ? $orderedProducts : $normOrderedProducts;
    }
    // Initialize variables for ledger
    $total = 0;
    $invoice = '';
    $invoice .= '
               <!-- begin table-responsive -->
               <div class="table-responsive">
                  <table class="table table-invoice">
                     <thead class="thead-dark">
                        <tr>
                           
                           <th style="border-top-left-radius: 20px; padding-left: 30px;" class="text-center">ITEM</th>
                           <th class="text-center">HSN</th>
                           <th class="text-center">COLOR</th>
                           <th class="text-center">SIZE</th>
                           <th class="text-center">GST</th>
                           <th class="text-center">QUANTITY</th>
                           <th class="text-center">PRICE</th>
                           <th style="border-top-right-radius: 20px;" class="text-center">T-PRICE</th>
                        </tr>
                     </thead>
                     <tbody>';

    foreach ($allProducts as $singleProduct) {
      $invoice .= '<tr>';
      if (isset($singleProduct['itemType']) || isset($singleProduct['itemName'])) {
        $itemIs = !empty($singleProduct['itemType']) ? $singleProduct['itemType'] : (!empty($singleProduct['itemName']) ? $singleProduct['itemName'] : '');
        $invoice .= '<td class="text-center productNameCell">' . $itemIs . '</td>';
      }
      
      if (isset($singleProduct['hsn']) || isset($singleProduct['hsnIs'])) {
        $itemHsnIs = !empty($singleProduct['hsn']) ? $singleProduct['hsn'] : (!empty($singleProduct['hsnIs']) ? $singleProduct['hsnIs'] : '');
        $invoice .= '<td class="text-center hsnCell">' . $itemHsnIs . '</td>';
      }
      
      if (isset($singleProduct['colorName']) || isset($singleProduct['colorIs'])) {
        $itemColorIs = !empty($singleProduct['colorName']) ? $singleProduct['colorName'] : (!empty($singleProduct['colorIs']) ? $singleProduct['colorIs'] : '');
        $invoice .= '<td class="text-center">' . $itemColorIs . '</td>';
      }
      
      if (isset($singleProduct['sizeName']) || isset($singleProduct['sizeIs'])) {
        $itemSizeIs = !empty($singleProduct['sizeName']) ? $singleProduct['sizeName'] : (!empty($singleProduct['sizeIs']) ? $singleProduct['sizeIs'] : '');
        $invoice .= '<td class="text-center">' . $itemSizeIs . '</td>';
      }
      
      if (isset($singleProduct['gst']) || isset($singleProduct['gstIs'])) {
        $itemGstIs = !empty($singleProduct['gst']) ? $singleProduct['gst'] : (!empty($singleProduct['gstIs']) ? $singleProduct['gstIs'] : '');
        $invoice .= '<td class="text-center">' . $itemGstIs . '</td>';
      }
      
      $invoice .= '<td class="text-center">' . $singleProduct['quantityIs'] . '-Pieces</td>';
      $invoice .= '<td class="text-center"> &#x20B9; <b>' . $singleProduct['priceIs'] . '</b></td>';
      $totalQtyPrice = $singleProduct['quantityIs'] * $singleProduct['priceIs'];
      $invoice .= '<td class="text-center"> &#x20B9; <b>' . $totalQtyPrice . '</b></td>';
      
      $invoice .= '</tr>';
      
      $total += $totalQtyPrice;
     
    }

    $invoice .= '</tbody>
  <thead class="thead-dark">
   <tr>
      <th style="border-bottom-left-radius:20px; padding-left: 30px;">DISCOUNT IS EXCLUDED</th>
      <th class="text-center"></th>
      <th class="text-center"></th>
      <th class="text-center"></th>
      <th class="text-center"></th>
      <th class="text-center"></th>

      
      <th class="text-left" colspan="4" style="border-bottom-right-radius:20px; padding-right: 20px;">
         TOTAL AMOUNT: &#x20B9;' . $total . '</th>
   </tr>
  </thead>
</table>';
    $style = '<style type="text/css">
    thead.thead-dark {

   }
    .hsnCell{
      color:aqua;
      text-decoration: blink;

    }

    #modalInvoiceData {

       animation: scaleUp 0.5s ease-in-out 0s forwards; */
  }

body {
   margin-top: 20px;
   background: #eee;
}

.bg-img {
   position: absolute;
   width: 39rem;
   margin-left: 215px;
   /* margin-bottom: 122px; */
   bottom: 13rem;
}

.ledgerheader {
   width: -webkit-fill-available;
   position: inherit;
   bottom: 70px;
}

.footerImg {
   width: -webkit-fill-available;
}

.invoice {
   background: #fff;
   padding: 20px;
   position: relative;

}

.invoice-company {
   font-size: 20px
}

.invoice-header {
   margin: 0 -20px;
   background: white;
   padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
   display: table-cell;
   width: 1%
}

.invoice-from,
.invoice-to {
   padding-right: 20px;
   font-size: 20px;
   width: 50%;
   position: absolute;
   bottom: 57rem;
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
   font-size: 16px;
   font-weight: 600
}

.invoice-date {
   text-align: right;
   padding-left: 20px
}

.invoice-price {
   background: #f0f3f4;
   display: table;
   width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
   display: table-cell;
   padding: 20px;
   font-size: 20px;
   font-weight: 600;
   width: 75%;
   position: relative;
   vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
   display: table-cell;
   vertical-align: middle;
   padding: 0 20px
}

.invoice-price small {
   font-size: 12px;
   font-weight: 400;
   display: block
}

.invoice-price .invoice-price-row {
   display: table;
   float: left
}

.invoice-price .invoice-price-right {
   width: 25%;
   background: #2d353c;
   color: #fff;
   font-size: 28px;
   text-align: right;
   vertical-align: bottom;
   font-weight: 300
}

.invoice-price .invoice-price-right small {
   display: block;
   opacity: .6;
   position: absolute;
   top: 10px;
   left: 10px;
   font-size: 12px
}

.invoice-footer {
   border-top: 1px solid #ddd;
   padding-top: 10px;
   font-size: 10px
}

.invoice-note {
   color: #999;
   margin-top: 80px;
   font-size: 85%
}

.invoice>div:not(.invoice-footer) {
   margin-bottom: 172px;


}

.btn.btn-white,
.btn.btn-white.disabled,
.btn.btn-white.disabled:focus,
.btn.btn-white.disabled:hover,
.btn.btn-white[disabled],
.btn.btn-white[disabled]:focus,
.btn.btn-white[disabled]:hover {
   color: #2d353c;
   background: #fff;
   border-color: #d9dfe3;
}
.productNameCell{
   font-size: var(--fs-7);
   font-weight: var(--weight-700);
   color: var(--salmon-pink);
}
.table .thead-dark th {
   border: none;
   background-color: hsl(353, 100%, 78%);;
}
div#modalInvoiceData {
   width: 772px;
}
.table-responsive {
   width: inherit;
}

@media screen and (max-width: 420px) {
   div#modalInvoiceData {
      font-size: 8px;
      width: 472px;
      overflow-x: scroll;
  }
 }

@media (min-width: 768px)
#modalInvoiceData {
    display: flex;
    align-items: center;
    max-width: 1776px;
    width: fit-content;
}
</style>
';


    return array($style, $invoice, $orderInfo, $shopInfo, $payInfo, $deliveryInfo);
  }


  // Devlopment by souvik started


  public function getMostSellingProduct($retId)
  {
    $url = "https://raiganj.crio77.com/api/products.php?id=" . $retId . "&limit=180Days";
    //First we need to get the data from api
    $response = file_get_contents($url);
    $decodedResponce = json_decode($response, true);

    //Now we need to process data
    for ($i = 0; $i < sizeof($decodedResponce); $i++) {
      $product[$i] = $decodedResponce[$i]['itemName'];
      $quantity[$i] = $decodedResponce[$i]['totQuantity'];
      $amount[$i] = $decodedResponce[$i]['totAmount'];
    }
    $data = array(
      'product' => $product,
      'quantity' => $quantity,
      'amount' => $amount
    );
    return $data;
  }
}
