<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Crio</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <div class="container">
      <div class="col-md-12">
         <div class="invoice">
            <img class="ledgerheader" src="<?php echo ASSETS . THEME  ?>imagesLup.png" alt="" srcset="">
            <!-- begin invoice-company -->
            <!-- <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            Company Name, Inc
         </div> -->
            <!-- end invoice-company -->
            <!-- begin invoice-header -->
            <div class="invoice-header">
               <div class="invoice-from">
                  <small>from</small>
                  <address class="m-t-5 m-b-5">
                     <strong class="text-inverse">Twitter, Inc.</strong><br>
                     Street Address<br>
                     City, Zip Code<br>
                     Phone: (123) 456-7890<br>
                     Fax: (123) 456-7890
                  </address>
               </div>
               <!-- <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Company Name</strong><br>
                  Street Address<br>
                  City, Zip Code<br>
                  Phone: (123) 456-7890<br>
                  Fax: (123) 456-7890
               </address>
            </div> -->

            </div>
            <!-- end invoice-header -->
            <!-- begin invoice-content -->
            <div class="invoice-content">
               <div>
                  <img class="bg-img" src="<?php echo ASSETS . THEME  ?>imagestransparentIcon.png" alt="" srcset="">
               </div>
               <!-- begin table-responsive -->
               <div class="table-responsive">
                  <table class="table table-invoice">
                     <thead class="thead-dark">
                        <tr>
                           <th style="border-top-left-radius: 20px 20px;">DATE</th>
                           <th class="text-center">PARTICULARS</th>
                           <th class="text-center">CREDIT</th>
                           <th class="text-right">DEBIT</th>
                           <th class="text-right" style="border-top-right-radius: 20px 20px;">BALANCE</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              hh
                           </td>
                           <td class="text-center">$50.00</td>
                           <td class="text-center">50</td>
                           <td class="text-right">$2,500.00</td>
                           <td class="text-right">$2,500.00</td>
                        </tr>
                        <tr>
                           <td>
                              ghh
                           </td>
                           <td class="text-center">$50.00</td>
                           <td class="text-center">40</td>
                           <td class="text-right">$2,000.00</td>
                           <td class="text-right">$2,000.00</td>
                        </tr>                      
                        <tr>
                           <td>
                              ghh
                           </td>
                           <td class="text-center">$50.00</td>
                           <td class="text-center">50</td>
                           <td class="text-right">$2,500.00</td>
                           <td class="text-right">$2,500.00</td>
                        </tr>
                        
                     </tbody>
                     <thead class="thead-dark">
                        <tr>
                           <th style="border-bottom-left-radius: 20px 20px;">FROM</th>
                           <th class="text-center">TO</th>
                           <th class="text-center">NO. BILLS</th>

                           <th class="text-right" colspan="2" style="border-bottom-right-radius: 20px 20px;">CLOSING
                              BALANCE: 21.30.2022</th>
                        </tr>
                     </thead>
                  </table>
               </div>
               <!-- end table-responsive -->
               <!-- begin invoice-price -->

               <!-- end invoice-price -->
            </div>
            <!-- end invoice-content -->
            <!-- begin invoice-note -->

            <!-- end invoice-note -->
            <!-- begin invoice-footer -->
            <!-- <div class="invoice-footer">
            
         </div> -->
            <!-- end invoice-footer -->
            <img class="footerImg" src="<?php echo ASSETS . THEME  ?>imagesld3.png" alt="" srcset="">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
         </div>
      </div>
   </div>

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

   <script type="text/javascript">

   </script>
</body>

</html>