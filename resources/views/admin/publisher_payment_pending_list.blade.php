
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="robots" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="robots" content="noindex, nofollow" />
   <!-- PAGE TITLE HERE -->
   <title>Goverment of Tamil Nadu - Book Procurement</title>
   <!-- FAVICONS ICON -->
   <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/fevi.svg') }}">
    <?php
        include "admin/plugin/plugin_css.php";
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
            @include ('admin.navigation')
      <!--**********************************
            Sidebar end
            ***********************************-->
      <!--**********************************
            Content body start
            ***********************************-->
      <div class="content-body">
         <div class="container-fluid">
            <div class="card">
               
                <div class="card mb-4 mb-4">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="mb-0 bc-title">
                                <b>Create Member</b>
                            </h3>
                            <a class="btn btn-primary  btn-sm" href="member_list.php">
                                <i class="fas fa-plus"></i> List Of Member </a>
                        </div>
                    </div>
                </div>
               <div class="card-body">


                  <div class="table-responsive">
                     <table id="example4" class="display table" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>Roll No</th>
                              <th>Publisher Name</th>
                              <th>Contact Number</th>
                              <th>State </th>
                              <th>Update Status</th>
                              <th>Status </th>
                              <th>Date</th>
                              <th>Control</th>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <td>01</td>
                              <td>
                                 <p class="p-0 m-0 fw-bolder">Name Of Users</p>Id:264445456456
                              </td>
                              <td>554545645645646</td>
                              <td>Tamil Nadu</td>
                              <td>
                                 <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                 </div>
                              </td>

                              <td><span class="badge light badge-success">Active</span></td>
                              <td>10-02-2023</td>
                              <td><a href="pub_profile.php"><i class="fa fa-eye p-2"></i></a>
                                 <i class="fa fa-pencil p-2"></i>
                                 <i class="fa fa-trash p-2"></i>
                                 <a href="pub_payment_list.php"><i class="fa fa-list-check p-2"></i></a>
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
   <!--**********************************
         Content body end
         ***********************************-->
   <!--**********************************
         Footer start
         ***********************************-->
         @include ("admin.footer")
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
        include "admin/plugin/plugin_js.php";
         ?>
</body>

</html>