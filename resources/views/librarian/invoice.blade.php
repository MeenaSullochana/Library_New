
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta name="robots" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
      <meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
      <meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
      <meta property="og:image" content="https://yeshadmin.dexignzone.com/xhtml/social-image.png">
      <meta name="format-detection" content="telephone=no">
      <!-- PAGE TITLE HERE -->
      <title>Goverment of Tamil Nadu - Book Procurement</title>
      <!-- FAVICONS ICON -->
      <link rel="shortcut icon" type="image/png" href="{{ asset('librarian/images/fevi.svg') }}">
    <?php
        include "librarian/plugin/plugin_css.php";
    ?>
   </head>
   <body>
      <!--*******************
         Preloader start
         ********************-->
      <div id="preloader">
         <div class="text-center">
            <img src="images/goverment_loader.gif" alt="" width="25%"> 
         </div>
      </div>
      <!--*******************
         Preloader end
         ********************-->
      <!--**********************************
         Main wrapper start
         ***********************************-->
      <div id="main-wrapper">
         <!--**********************************
            Nav header start
            ***********************************-->
            @include ('librarian.navigation')

         <!--**********************************
            Sidebar end
            ***********************************-->
         <!--**********************************
            Content body start
            ***********************************-->
         <div class="content-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card mt-3">
                        <div class="card-header"> 
                           <span class="d-flex align-items-center">
                              <i class="bi bi-arrow-left-circle fs-1" onclick="history.back();"></i>
                              <p class="ps-2">Back</p>
                           </span>
                           <strong>
                           <span class="badge bg-primary"><i class="fa fa-print"></i></span>
                           <span class="badge bg-primary"><i class="bi bi-file-earmark-excel-fill"></i></span> 
                           </strong>
                        </div>
                        <div class="card-body">
                           <div class="row align-item-center">
                              <div class="col-6">
                                 <div class="brand-logo mb-2 inovice-logo">
                                       <img src="../user_accountant/images/logo.png" class="w-50" alt="">
												</div>
                              </div>
                              <div class="col-6">
                                 <img src="images/qr.png" alt="" class="img-fluid width110"> 
                              </div>
                           </div>
                           <hr>
                           <div class="row mb-5">
                              <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                 <h6>From:</h6>
                                 <div> <strong>Webz Poland</strong> </div>
                                 <div>Madalinskiego 8</div>
                                 <div>71-101 Szczecin, Poland</div>
                                 <div>Email: info@webz.com.pl</div>
                                 <div>Phone: +48 444 666 3333</div>
                              </div>
                              <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                 <h6>To:</h6>
                                 <div> <strong>Bob Mart</strong> </div>
                                 <div>Attn: Daniel Marek</div>
                                 <div>43-190 Mikolow, Poland</div>
                                 <div>Email: marek@daniel.com</div>
                                 <div>Phone: +48 123 456 789</div>
                              </div>
                              <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                 <div class="row align-items-top">
                                    <div class="col-sm-6">
                                       <div class="brand-logo mb-2 inovice-logo">
                                          <!-- <img src="../user_accountant/images/logo.png" class="w-25" alt=""> -->
                                          <h6>Invoice Details:</h6>
                                       </div>
                                       <span> <strong class="d-block">Rs 0.15050000 </strong>
                                       Invoice Number<strong> :12245454545</strong></span><br>
                                       <small class="text-muted">Date Of Invoice = $6590 USD</small>
                                    </div>
                                    <div class="col-sm-6">
                                       <h6>Billing Address:</h6>
                                       <div> <strong>Bob Mart</strong> </div>
                                       <div>Attn: Daniel Marek</div>
                                       <div>43-190 Mikolow, Poland</div>
                                       <div>Email: marek@daniel.com</div>
                                       <div>Phone: +48 123 456 789</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-border">
                                 <thead>
                                    <tr>
                                       <th class="center">#</th>
                                       <th>Item</th>
                                       <th>Description</th>
                                       <th class="right">Unit Cost</th>
                                       <th class="center">Qty</th>
                                       <th class="right">Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="center">1</td>
                                       <td class="left strong">
                                          <a href="../website/shope.php">
                                             Book Name
                                             <small>
                                                <p>Short Name</p>
                                             </small>
                                          </a>
                                       </td>
                                       <td class="left">Short Descrption</td>
                                       <td class="right">$999,00</td>
                                       <td class="center">1</td>
                                       <td class="right">$999,00</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="row">
                              <div class="col-lg-4 col-sm-5"> </div>
                              <div class="col-lg-4 col-sm-5 ms-auto">
                                 <table class="table table-clear">
                                    <tbody>
                                       <tr>
                                          <td class="left"><strong>Subtotal</strong></td>
                                          <td class="right">$8.497,00</td>
                                       </tr>
                                       <tr>
                                          <td class="left"><strong>Discount (20%)</strong></td>
                                          <td class="right">$1,699,40</td>
                                       </tr>
                                       <tr>
                                          <td class="left"><strong>VAT (10%)</strong></td>
                                          <td class="right">$679,76</td>
                                       </tr>
                                       <tr>
                                          <td class="left"><strong>Total</strong></td>
                                          <td class="right"><strong>$7.477,36</strong><br>
                                             <strong>0.15050000</strong>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--**********************************
         Content body end
         ***********************************-->
      <!--**********************************
         Footer start
         ***********************************-->
         @include ("librarian.footer")
      <!--**********************************
         Footer end
         ***********************************-->
      <!--**********************************
         Support ticket button start
         ***********************************-->
      <!--**********************************
         Support ticket button end
         ***********************************-->
      </div>
      <!--**********************************
         Main wrapper end
         ***********************************-->
         <?php
        include "librarian/plugin/plugin_js.php";
    ?>	
   </body>
</html>