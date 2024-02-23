
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
      <title>Government of Tamil Nadu - Book Procurement - Distriputor Inactive List</title>
      <!-- FAVICONS ICON -->
      <link rel="shortcut icon" type="image/png" href="{{ asset('distributor/images/fevi.svg') }}">
      <?php
          include "distributor/plugin/plugin_css.php";
      ?>
   </head>
   <body>
      <!--*******************
         Preloader start
         ********************-->
      <div id="preloader">
         <div class="text-center">
            <img src="{{ asset('distributor/images/goverment_loader.gif') }}" alt="" width="25%">
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
            @include("distributor.navigation")
         <!--**********************************
            Sidebar end
            ***********************************-->
         <!--**********************************
            Content body start
            ***********************************-->
         <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p>Distriputor List</p>
                            <p class="text-right">View</p>
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
                        <?php
                        $i = 0;
                        if(!empty($ActivedistriputorList)){
                        foreach($ActivedistriputorList as $listdis){
                           $i++;
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $listdis['book_distn_name']?></td>
                                <td><?php echo $listdis['distn_contact_number']?></td>
                                <td><?php echo $listdis['distn_state']?></td>
                                <td>
                                 <form method="POST">
                                    <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="statusId<?php echo $listdis['distribution_id']; ?>" name="featured_status"
                                          value="<?php
                                          if($listdis['status'] == 'Active'){
                                             echo "Inactive";
                                          }else{
                                             echo "Active";
                                          }
                                          ?>"<?php if($listdis['status'] == 'Active'){
                                             echo "checked";
                                          }?> data-isprm="<?php echo $listdis['distribution_id']; ?>">
                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>
                                 </form>
                                </td>
                                <?php
                                if($listdis['status'] == 'Active'){
                                ?>
                                <td><span class="badge light badge-success"><?php echo $listdis['status']?></span>
                              </td>
                                <?php
                                 }else{
                                ?>
                                <td><span class="badge light badge-danger"><?php echo $listdis['status']?></span></td>
                                <?php
                                    }
                                    ?>
                                <td><?php echo $listdis['create_at']?></td>
                                <td><a href="dist_profile.php?userid=<?php echo $listdis['distribution_id'];?>"><i class="fa fa-eye p-2"></i></a>
                                    <i class="fa fa-pencil p-2"></i>
                                    <i class="fa fa-trash p-2"></i>
                                 </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                              No Data
                        </div>
                        <?php
                    }
                        ?>
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
         @include("distributor.footer")
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
         include "distributor/plugin/plugin_js.php";
     ?>
   <script>
        $(document).ready(function() {
            $("input[type=checkbox]").change(function() {
                // var value = $(this).val();
                // var idValue = $(this).attr();
                // alert("Am i checked Value? - " + $(this).val() + "\nMy ID:" + $(this).attr("data-isprm"));
                jQuery.ajax({
                url: "core/ajex.php",
                type: "POST",
                data:  {dist_status: $(this).val(), id: $(this).attr("data-isprm")},

                success: function(data){
                    if(data == true){
                        Toastify({
                             text: 'Error To Update',
                             duration: 3000,
                             style: {
                                 background: 'linear-gradient(to right, green, green)',
                             }
                             }).showToast();

                           //   setTimeout(function() {
                           //       window.location.href = 'doctor_list.php';
                           //   }, 2000);
                    }else if(data == false){
                        Toastify({
                        text: 'Updated SuccessFully',
                        duration: 3000,
                        style: {
                            background: 'linear-gradient(to right, green, green)',
                        }
                        }).showToast();

                        // setTimeout(function() {
                        //     window.location.href = 'doctor_list.php';
                        // }, 2000);
                    }

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                }
                });
            });
        });
    </script>
   </body>
</html>
