<?php 
// show();
// die;
?>
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

<style type="text/css">
      body {
         margin-top: 20px;
         background: #eee;
      }

      .bg-img {
         position: absolute;
         width: 39rem;
         margin-left: 145px;
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
         display: flex;
    margin: 0 -20px;
    background: white;
    padding: 20px;
    flex-direction: column;
    POSITION: absolute;
    margin-top: -15rem;
      }
p{
   margin-bottom: 1px;
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
         /* position: absolute; */
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
         /* margin-bottom: 172px; */
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
      .invoice-content {
    margin-top: 4rem;
}
.infoLedger{
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   font-size: 20px;
}
   </style>
<body>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <div class="container">
      <div class="col-md-12">
         <div class="invoice">
            <img class="ledgerheader" src="<?php echo ASSETS . THEME  ?>images/Lup.png" alt="" srcset="">
           
            <div class="invoice-header">
               <!-- <p class="infoLedger">LEDGER ACCOUNT:</p> -->
               <P class="infoLedger">SHOP-NAME: <?php echo $retailerAuthData->name ?></P>

               <P class="infoLedger">OWNER:<?php echo $retailerAuthData->owner ?></P>
               <P class="infoLedger">GSTIN:<?php echo $retailerAuthData->gst ?></P>
               <address class="m-t-2 m-b-2 infoLedger">
               <P class="infoLedger">DIST:<?php echo $retailerAuthData->dist ?></P>
               <P class="infoLedger">AREA:<?php echo $retailerAuthData->area ?></P>
               <P class="infoLedger">PHONE:<?php echo $retailerAuthData->phone ?></P>
               <?php echo $retailerAuthData->address ?>
                  </address>

            </div>
            <!-- end invoice-header -->
            <!-- begin invoice-content -->
            <div class="invoice-content">
               <div>
                  <img class="bg-img" src="<?php echo ASSETS . THEME  ?>images/transparentIcon.png" alt="" srcset="">
               </div>

               <?php echo $htmlGeneratedLedger;
                ?>
            
            </div>
          
            <img class="footerImg" src="<?php echo ASSETS . THEME  ?>images/ld3.png" alt="" srcset="">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
         </div>
      </div>
   </div>


   <script type="text/javascript">

   </script>
</body>

</html>