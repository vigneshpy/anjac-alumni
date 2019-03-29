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
                                    <h4 class="card-title" align="center">Requested  Events</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Event Name</th>
                                  
                                           <th>Description</th>
                                            <th>Event Date</th>
                                        
                                            <th>Year of Students</th>
                                            <th>Total No of Students</th>
                                                  <th >Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data as $row):?>
                                            <tr>
                                                <td><?php echo $row['propose_id']?></td>
                                              
                                                <td><?php echo $row['event_name']?></td>
                                        
                                                <td><?php echo $row['event_description']?></td>
                                          
                                                <td ><?php echo $row['event_date']?></td>
                                                <td ><?php echo $row['student_participate']?></td>
                                                <td ><?php echo $row['no_student']?></td>
                                             
                                                <td>


                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                                <button tool-tip="Allow" class="allow_event btn btn-success outline" id="<?php echo $row['propose_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-check"></i></button> 
                                                
                                                  
                                                <button class="reject_event btn btn-danger outline" tool-tip="deny" id="<?php echo $row['propose_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-times"></i></button> 



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
                                    <h4 class="card-title" align="center">Approved  Events</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Event Name</th>
                                  
                                           <th>Description</th>
                                            <th>Event Date</th>
                                        
                                            <th>Year of Students</th>
                                            <th>Total No of Students</th>
                                                  <th >Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data1 as $row):?>
                                            <tr>
                                                <td><?php echo $row['propose_id']?></td>
                                              
                                                <td><?php echo $row['event_name']?></td>
                                        
                                                <td><?php echo $row['event_description']?></td>
                                          
                                                <td ><?php echo $row['event_date']?></td>
                                                <td ><?php echo $row['student_participate']?></td>
                                                <td ><?php echo $row['no_student']?></td>
                                             
                                                <td>


                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                             
                                                
                                                <button class="reject_event btn btn-danger outline" tool-tip="deny" id="<?php echo $row['propose_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-times"></i></button> 



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
                                    <h4 class="card-title" align="center">Denied  Events</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>ID</th>
                                            <th>Event Name</th>
                                  
                                           <th>Description</th>
                                            <th>Event Date</th>
                                        
                                            <th>Year of Students</th>
                                            <th>Total No of Students</th>
                                                  <th >Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data2 as $row):?>
                                            <tr>
                                                <td><?php echo $row['propose_id']?></td>
                                              
                                                <td><?php echo $row['event_name']?></td>
                                        
                                                <td><?php echo $row['event_description']?></td>
                                          
                                                <td ><?php echo $row['event_date']?></td>
                                                <td ><?php echo $row['student_participate']?></td>
                                                <td ><?php echo $row['no_student']?></td>
                                             
                                                <td>

                                                      <button tool-tip="Allow" class="allow_event btn btn-success outline" id="<?php echo $row['propose_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-check"></i></button> 

                                                <button class="update_user btn btn-info outline" id=""data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></button>

                                                    
                                                
                                                <button class="reject_event_delete btn btn-danger outline" tool-tip="deny" id="<?php echo $row['propose_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button> 



                                              </td>

                                                                             
                                            </tr>
                                           <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
              </div>
            

<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Requested Events</h5>
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
           <h5 align="center">Event Details</h5>
          <div class="form-group" align="">
            <label for="recipient-name" class="col-form-label">Event Name</label>
            <input type="text" class="form-control" id="evt-name" name="ename" disabled>
            <input type="hidden" class="form-control" id="evt-id" name="eid" disabled>
          </div>
     
         <div class="form-group" align="">
            <label for="evt-name" class="col-form-label">Event Description</label>
            <input type="text" class="form-control" id="evt-des" name="edecription" disabled>
          </div>   
          <div class="form-group" align="">
            <label for="evt-date" class="col-form-label">Event Date</label>
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
//delete events
 $(document).on('click', '.update_user', function(){  
           var event_id = $(this).attr("id");  

          
           $.ajax({   
                url:"<?php echo base_url();?>admin/update_event",  
                method:"GET",  
                data:{event_id:event_id},  
                success:function(data){  
                  // alert(data);
                  var response = JSON.parse(data);

                    $('#evt-name').val(response.event_name);  
                    $('#evt-id').val(response.event_id);  
                   
                     $('#evt-des').val(response.event_description);  
                     $('#evt-date').val(response.event_date);  
                     $('#evt-time').val(response.event_time);  
            

                      }  
                    });
                 });
                
        
</script>
<script type="text/javascript">

          $(document).on('click', '#update_changes', function(){
                         $.ajax({   
                url:"<?php echo base_url();?>admin/update_event1",  
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


    $(".delete_event").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this Event",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Requested Event Denied", {
      icon: "success",

    });

var del_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/event_delete',
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
  //allow event
$(document).ready(function()

{


    $(".allow_event").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Allow this Event",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Event Allowed", {
      icon: "success",

    });

var event_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/event_allow',
            data:'event_id='+event_id,
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
  //deny event
$(document).ready(function()

{


    $(".deny_event1").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this Event",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Event Rejected", {
      icon: "warning",

    });

var event_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/event_deny',
            data:'event_id='+event_id,
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
  //reject event
$(document).ready(function()

{


    $(".reject_event_delete").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Delete this Requested Event",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Event deleted", {
      icon: "warning",

    });

var event_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/event_deny_delete',
            data:'event_id='+event_id,
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
  //reject event
$(document).ready(function()

{


    $(".reject_event").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you want to Deny this Event",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Event Rejected", {
      icon: "warning",

    });

var event_id = $(this).attr('id');
var element = $(this);
$.ajax({
            type:'GET',
            url:'<?php echo base_url();?>admin/event_deny',
            data:'event_id='+event_id,
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
           var event_id = $(this).attr("id");  
          
           $.ajax({   
                url:"<?php echo base_url();?>admin/view_request_event",  
                method:"GET",  
                data:{event_id:event_id},  
                success:function(data){  
                  // alert(data);
                  var response = JSON.parse(data);
                    $('#evt-name').val(response.event_name);  
                    $('#evt-id').val(response.event_id);  
                   
                     $('#evt-des').val(response.event_description);  
                     $('#evt-date').val(response.event_date);  
                     $('#evt-time').val(response.event_time);  
            
                      }  
                    });
                 });
                
        
</script>
<script type="text/javascript">
          $(document).on('click', '#update_changes', function(){
                         $.ajax({   
                url:"<?php echo base_url();?>admin/update_event1",  
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