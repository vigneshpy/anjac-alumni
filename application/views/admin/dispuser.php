
<br>
<div class="container">

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center"> Active Users</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                  
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                        
                                            <th>Course</th>
                                            <th>Branch</th>
                                            <th>DOB</th>
                                            <th>Year of Entry</th>
                                              <th>Year of Graduation</th>
                                              <th  style="margin-top:20px;">Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data as $row):?>
                                            <tr>
                                                <td><?php echo $row['alumni_id']?></td>
                                                <td> <img src="<?php echo $row['profile_pic']?>" alt="<?php echo $row['fname']?>" class="mr-3 mt-3 rounded-circle" style="width:45px;"><?php echo $row['fname']?></td>
                                      
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['pno']?></td>
                                          
                                                <td ><?php echo $row['course']?></td>
                                                <td ><?php echo $row['branch']?></td>
                                                <td><?php echo $row['dob']?></td>
                                                <td><?php echo $row['year_entry']?></td>
                                                <td><?php echo $row['year_grad']?></td>
                                        
                                                <td style="margin-top:20px;"><a href="<?php echo base_url();?>user/profile/<?php echo $row['user_name']?>" class="btn btn-primary" tooltip="view the user" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></a>

                                                <button class="delete_user btn btn-danger outline" id="<?php echo $row['user_name']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button></td>
                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Inactive Users</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                  
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                        
                                            <th>Course</th>
                                            <th>Branch</th>
                                            <th>DOB</th>
                                            <th>Year of Entry</th>
                                              <th>Year of Graduation</th>
                                              <th  style="margin-top:20px;">Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data1 as $row):?>
                                            <tr>
                                                <td><?php echo $row['alumni_id']?></td>
                                                <td> <img src="<?php echo $row['profile_pic']?>" alt="<?php echo $row['fname']?>" class="mr-3 mt-3 rounded-circle" style="width:45px;"><?php echo $row['fname']?></td>
                                      
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['pno']?></td>
                                          
                                                <td ><?php echo $row['course']?></td>
                                                <td ><?php echo $row['branch']?></td>
                                                <td><?php echo $row['dob']?></td>
                                                <td><?php echo $row['year_entry']?></td>
                                                <td><?php echo $row['year_grad']?></td>
                                        
                                                <td style="margin-top:20px;"></a>

                                                <button id="<?php echo $row['user_name']?>" class="delete_user  btn btn-danger outline" style="padding:5px;margin:5px;"><i class="fa fa-trash" data-toggle="confirmation"></i></button></td>
                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
                    </div>

              </div>
<style type="text/css">
  



</style>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>

<script type="text/javascript">
$(document).ready(function()

{


    $(".delete_user").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this user",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! User Removed", {
      icon: "success",

    });

var del_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'POST',
            url:'<?php echo base_url();?>admin/admin_delete',
            data:'delete_id='+del_id,
            success: function(data)
            {
                 
                  
            }

        });
 $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
  } else {
    swal("Cancelled",{
      icon:"info",
    });
  }
});

    });
});
</script>
 
          























