<div class="container-fluid">
	<h4 align="center">Alumni Needs</h4>

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center"></h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                      
                                            <th>Post Id</th>
                                            <th>Posted By</th>
                                  
                                            <th>Category</th>
                                            <th>Post</th>
                                        
                                            <th>Added Date</th>
                                       
                                              <th  style="margin-top:20px;">Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data as $row):?>
                                            <tr>
                                                <td><?php echo $row['need_id']?></td>
                                                <td><img src="<?php echo $row['profile_pic']?>" alt="<?php echo $row['posted_by']?>" class="mr-3 mt-3 rounded-circle" style="width:45px;"><?php echo $row['posted_by']?></td>
                                        
                                                <td><?php echo $row['category']?></td>
                                                <td><?php echo $row['body']?></td>
                                                <td><?php echo $row['added_date']?></td>
                                         
                                      
                                            
                                        
                                                <td style="margin-top:20px;"><a href="<?php echo base_url();?>needs/details?id=<?php echo $row['need_id']?>" class="btn btn-primary" tooltip="view the user" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></a>

                                                      <button class="delete_user btn btn-danger outline" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button></td>
                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center"></h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                      
                                            <th>Comment Id</th>
                                            <th>Commented By</th>
                                            <th>Comment</th>
                                            <th>email</th>
                                            <th>Date</th>
                                     
                                  
                                       
                                       
                                              <th  style="margin-top:20px;">Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data1 as $row):?>
                                            <tr>
                                                <td><?php echo $row['comment_id']?></td>
                                                <td><img src="<?php echo $row['profile_pic']?>" alt="<?php echo $row['commented_by']?>" class="mr-3 mt-3 rounded-circle" style="width:45px;"><?php echo $row['commented_by']?></td>
                                                <td><?php echo $row['comment_text']?></td>
                                                <td><?php echo $row['user_email']?></td>
                                                <td><?php echo $row['date']?></td>
                                         
                                      
                                            
                                        
                                                <td style="margin-top:20px;"><a href="<?php echo base_url();?>needs/details?id=<?php echo $row['post_id']?>" class="btn btn-primary" tooltip="view the user" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></a>

                                                      <button class="delete_comment btn btn-danger outline" id="<?php echo $row['post_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button></td>
                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>


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
alert(del_id);
$.ajax({
            type:'POST',
            url:'<?php echo base_url();?>admin/need_delete',
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


    $(".delete_comment").click(function()
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
alert(del_id);
$.ajax({
            type:'POST',
            url:'<?php echo base_url();?>admin/comment_delete',
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
 
          


