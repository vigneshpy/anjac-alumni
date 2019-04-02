<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-clockpicker.css">
<style type="text/css">
 @media screen and (min-width: 768px) {
  .modal {
  position: fixed;
  /*top: 50%;*/
  left: 20%;
  top: -40%;
  }

</style>
<br>
<div class="container">

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Requested  Needs</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>Post ID</th>
                                            <th>Posted By</th>

                                            <th>Email</th>

                                            <th>User Name</th>
                                  
                                           <th>Category</th>
                                           <th>Content</th>
                                            <th>Posted Date</th>
                                        
                                       
                                                  <th >Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data as $row):?>
                                            <tr>
                                                <td><?php echo $row['need_id']?></td>
                                              
                                                <td><?php echo $row['posted_by']?></td>
                                        
                                                <td><?php echo $row['user_email']?></td>
                                          
                                                <td ><?php echo $row['user_name']?></td>
                                                <td ><?php echo $row['category']?></td>
                                                <td ><?php echo $row['body']?></td>
                                                <td ><?php echo $row['added_date']?></td>
                                             
                                                <td>


                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                                <button tool-tip="Allow" class="allow_need btn btn-success outline" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-check"></i></button> 
                                                
                                                  
                                                <button class="reject_need btn btn-danger outline" tool-tip="deny" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-times"></i></button> 



                                              </td>

                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
              </div>
              <div class="container">

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Approved  Needs</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>Post ID</th>
                                            <th>Posted By</th>

                                            <th>Email</th>

                                            <th>User Name</th>
                                  
                                           <th>Category</th>
                                           
                                           <th>Content</th>

                                            <th>Posted Date</th>
                                        
                                       
                                                  <th >Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data1 as $row):?>
                                            <tr>
                                                <td><?php echo $row['need_id']?></td>
                                              
                                                <td><?php echo $row['posted_by']?></td>
                                        
                                                <td><?php echo $row['user_email']?></td>
                                          
                                                <td ><?php echo $row['user_name']?></td>
                                                <td ><?php echo $row['category']?></td>
                                                <td ><?php echo $row['body']?></td>
                                                <td ><?php echo $row['added_date']?></td>
                                             
                                                <td>


                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                             
                                                
                                                <button class="reject_need btn btn-danger outline" tool-tip="deny" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-times"></i></button> 



                                              </td>

                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
              </div>
                          <div class="container">

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Denied  Needs</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                              <thead>
                                            <tr><th>Post ID</th>
                                            <th>Posted By</th>

                                            <th>Email</th>

                                            <th>User Name</th>
                                  
                                           <th>Category</th>
                                           <th>Content/th>
                                            <th>Posted Date</th>
                                        
                                       
                                                  <th>Action</th>
                        
                              </thead>
                                        <tbody>
                                          <?php foreach($data2 as $row):?>
                                            <tr>
                                                <td><?php echo $row['need_id']?></td>
                                              
                                                <td><?php echo $row['posted_by']?></td>
                                        
                                                <td><?php echo $row['user_email']?></td>
                                          
                                                <td ><?php echo $row['user_name']?></td>
                                                <td ><?php echo $row['category']?></td>
                                                <td ><?php echo $row['body']?></td>
                                                <td ><?php echo $row['added_date']?></td></tr>
                                             
                                                <td>

                                                      <button tool-tip="Allow" class="allow_need btn btn-success outline" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-check"></i></button> 

                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                                    
                                                
                                                <button class="reject_need_delete btn btn-danger outline" tool-tip="deny" id="<?php echo $row['need_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button> 



                                              </td>

                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                              <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Comments(Reply)</h4>
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
                                          <?php foreach($data3 as $row):?>
                                            <tr>
                                                <td><?php echo $row['comment_id']?></td>
                                                <td><img src="<?php echo $row['profile_pic']?>" alt="<?php echo $row['commented_by']?>" class="mr-3 mt-3 rounded-circle" style="width:45px;"><?php echo $row['commented_by']?></td>
                                                <td><?php echo $row['comment_text']?></td>
                                                <td><?php echo $row['user_email']?></td>
                                                <td><?php echo $row['date']?></td>
                                         
                                      
                                            
                                        
                                                <td style="margin-top:20px;"><a href="<?php echo base_url();?>needs/details?id=<?php echo $row['post_id']?>" class="btn btn-primary" tooltip="view the user" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></a>

                                                      <button class="delete_comment btn btn-danger outline" id="<?php echo $row['post_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button
                                                        ></td>
                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
              </div>
      

<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Requested needs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" id="updateform">
        <h5 align="center">Co-ordinator Info</h5>
          <div class="form-group" align="">

            <label for="recipient-name" class="col-form-label">First Name</label>
            <input type="text" class="form-control" id="evt-name" name="fname" disabled>
            <input type="hidden" class="form-control" id="evt-id" name="eid" disabled>
          </div>
            <div class="form-group" align="">
            <label for="recipient-name" class="col-form-label">Last Name</label>
            <input type="text" class="form-control" id="evt-name" name="fname" disabled>
            <input type="hidden" class="form-control" id="evt-id" name="eid" disabled>
          </div>
            <div class="form-group" align="">
            <label for="recipient-name" class="col-form-label">email</label>
            <input type="text" class="form-control" id="evt-name" name="email" disabled>
            <input type="hidden" class="form-control" id="evt-id" name="eid" disabled>
          </div>
           <h5 align="center">need Details</h5>
          <div class="form-group" align="">
            <label for="recipient-name" class="col-form-label">need Name</label>
            <input type="text" class="form-control" id="evt-name" name="ename" disabled>
            <input type="hidden" class="form-control" id="evt-id" name="eid" disabled>
          </div>
     
         <div class="form-group" align="">
            <label for="evt-name" class="col-form-label">need Description</label>
            <input type="text" class="form-control" id="evt-des" name="edecription" disabled>
          </div>   
          <div class="form-group" align="">
            <label for="evt-date" class="col-form-label">need Date</label>
            <input type="date" class="form-control" id="evt-date" name="edate" disabled>
          </div> 
      
 <label for="evt-name" class="col-form-label">Year Of Student</label>

    <input type="text" class="form-control" value="" name="yof"  disabled="">
   

 <div class="form-group" align="">
            <label for="evt-date" class="col-form-label">No of Students</label>
            <input type="text" class="form-control" id="evt-date" name="no_student" disabled>
          </div> 
 
 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   
      </div>
       </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>


<script type="text/javascript">
//delete needs
 $(document).on('click', '.update_user', function(){  
           var need_id = $(this).attr("id");  

          
           $.ajax({   
                url:"<?php echo base_url();?>admin/update_need",  
                method:"GET",  
                data:{need_id:need_id},  
                success:function(data){  
                  // alert(data);
                  var response = JSON.parse(data);

                    $('#evt-name').val(response.posted_by);  
                    $('#evt-id').val(response.need_id);  
                   
                     $('#evt-des').val(response.need_description);  
                     $('#evt-date').val(response.need_date);  
                     $('#evt-time').val(response.need_time);  
            

                      }  
                    });
                 });
                
        
</script>
<script type="text/javascript">

          $(document).on('click', '#update_changes', function(){
                         $.ajax({   
                url:"<?php echo base_url();?>admin/update_need1",  
                method:"GET",  
                data:$('#updateform').serialize(),
                 beforeSend:function(){  
                        $('#update_changes').val("updating");

                      alert($('#updateform').serialize());
                         
                     },    
                success:function(data){  
                    window.location.reload();
     
                } ,
                  
                  
           }); });     
</script>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-clockpicker.js"></script>
 
<!-- <script type="text/javascript">


$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'set',
    hour12Timer:'true',
    format: 'hh:mm',
     autoclose: true
});

</script> 
 -->



<script type="text/javascript">
$(document).ready(function()

{


    $(".delete_need").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this need",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Requested need Denied", {
      icon: "success",

    });

var del_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/need_delete',
            data:'delete_id='+del_id,
            success: function(data)
            {
               window.location.reload();    
                  
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
 



<script type="text/javascript">
  //allow need
$(document).ready(function()

{


    $(".allow_need").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Allow this need",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("need Allowed", {
      icon: "success",

    });

var need_id = $(this).attr('id');
var element = $(this);


$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/need_allow',
            data:'need_id='+need_id,
            success: function(data)
            {
                 
                    location.reload();            }

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




<script type="text/javascript">
  //deny need
$(document).ready(function()

{


    $(".deny_need1").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this need",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("need Rejected", {
      icon: "warning",

    });

var need_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/need_deny',
            data:'need_id='+need_id,
            success: function(data)
            {
                 window.location.reload();

                  
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

<script type="text/javascript">
  //reject need
$(document).ready(function()

{


    $(".reject_need_delete").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Delete this Requested need",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("need deleted", {
      icon: "warning",

    });

var need_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/need_deny_delete',
            data:'need_id='+need_id,
            success: function(data)
            {
                 
                    // window.location.reload();
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









<script type="text/javascript">
  //reject need
$(document).ready(function()

{


    $(".reject_need").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this need",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("need Rejected", {
      icon: "warning",

    });

var need_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/need_deny',
            data:'need_id='+need_id,
            success: function(data)
            {
                 
                window.location.reload();
    
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
<script type="text/javascript">
$(document).on('click', '.update_user', function(){  
           var need_id = $(this).attr("id");  
          
           $.ajax({   
                url:"<?php echo base_url();?>admin/view_request_need",  
                method:"GET",  
                data:{need_id:need_id},  
                success:function(data){  
                  // alert(data);
                  var response = JSON.parse(data);
                    $('#evt-name').val(response.posted_by);  
                    $('#evt-id').val(response.need_id);  
                   
                     $('#evt-des').val(response.need_description);  
                     $('#evt-date').val(response.need_date);  
                     $('#evt-time').val(response.need_time);  
            
                      }  
                    });
                 });
                
        
</script>
<script type="text/javascript">
          $(document).on('click', '#update_changes', function(){
                         $.ajax({   
                url:"<?php echo base_url();?>admin/update_need1",  
                method:"GET",  
                data:$('#updateform').serialize(),
                 beforeSend:function(){  
                        $('#update_changes').val("updating");
                      alert($('#updateform').serialize());
                         
                     },    
                success:function(data){  
     
                } ,
                  
                  
           }); });     
</script>



<script type="text/javascript">
  

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
            type:'GET',
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

</script>