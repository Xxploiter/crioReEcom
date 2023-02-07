<?php
include_once '../app/Cache/cacheHandler.php';
class RetailerService
{
  // about the getLedgerDataFromAPI function this gets data from the api the cache time is one day
  private function getLedgerDataFromAPI($retailerId)
  {

    $data = cacheHandler::getDataFromCacheOrAPI('ledger_data', 'https://raiganj.crio77.com/api/ledger_data.php?id=' . $retailerId, 60 * 60 * 24, $retailerId);
    return $data;
  }

  public function returnJsonLedgerData($retailerId){
    $data = cacheHandler::getDataFromCacheOrAPI('ledger_data', 'https://raiganj.crio77.com/api/ledger_data.php?id=' . $retailerId, 60 * 60 * 24, $retailerId);
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
      } else {
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

    return $ledger;
  }
}
