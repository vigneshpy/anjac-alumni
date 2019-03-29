<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-clockpicker.css">
<style type="text/css">
 @media screen and (min-width: 768px) {
  .modal {
  position: fixed;
  /*top: 50%;*/
  left: 20%;
  top: -17%;
  }

</style>
<br>
<div class="container">

<div class="row">

          
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" align="center">Events</h4>
                                  </div>
                                <div class="card-body  table-responsive">
                                    <table class="table table-hover table-striped" style="border-spacing: 1px !important;">
                                        <thead>
                                            <tr><th>Event ID</th>
                                            <th>Event Name</th>
                                  
                                            <th>Description</th>
                                            <th>Event Date</th>
                                        
                                            <th>Event Time</th>
                                                  <th  style="margin-top:20px;">Action</th>
                                </tr></thead>
                                        <tbody>
                                          <?php foreach($data as $row):?>
                                            <tr>
                                                <td><?php echo $row['event_id']?></td>
                                              
                                                <td><?php echo $row['event_name']?></td>
                                        
                                                <td><?php echo $row['event_description']?></td>
                                          
                                                <td ><?php echo $row['event_date']?></td>
                                                <td ><?php echo $row['event_time']?></td>
                                             
                                        
                                                <td style="margin-top:20px;"><a href="" class="btn btn-primary" tooltip="view the event" style="padding:5px;margin:5px;"><i class="fa fa-eye"></i></a>

                                                <button class="delete_event btn btn-danger outline" id="<?php echo $row['event_id']?>" style="padding:5px;margin:5px;"><i class="fa fa-trash"></i></button> 

                                                <button class="update_user btn btn-success outline" id="<?php echo $row['event_id']?>"data-toggle="modal" data-backdrop="false" data-target="#updatemodal" style="padding:5px;margin:5px;"><i class="fa fa-pencil"></i></button>


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
        <h5 class="modal-title" id="exampleModalLongTitle">Update Field</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" id="updateform">
          <div class="form-group" align="center">
            <label for="recipient-name" class="col-form-label">Event Name</label>
            <input type="text" class="form-control" id="evt-name" name="ename" required>
            <input type="hidden" class="form-control" id="evt-id" name="eid" required>
          </div>
     
         <div class="form-group" align="center">
            <label for="evt-name" class="col-form-label">Event Description</label>
            <input type="text" class="form-control" id="evt-des" name="edecription" required>
          </div>   
          <div class="form-group" align="center">
            <label for="evt-date" class="col-form-label">Event Date</label>
            <input type="date" class="form-control" id="evt-date" name="edate" required>
          </div> 
      
 <label for="evt-name" class="col-form-label">Event Time</label>
<div class="input-group clockpicker">
    <input type="text" class="form-control" value="10:00" name="etime" >

    
    <span class="input-group-addon">
        <span class="fa fa-time"></span>
    </span>
    
</div>
 
 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button class="btn btn-primary" name="update_change" id="update_changes"> Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>


<script type="text/javascript">
//retrive event
 $(document).on('click', '.update_user', function(){  
           var event_id = $(this).attr("id");  


           alert(event_id);

          
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
 
<script type="text/javascript">


$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'set',
    hour12Timer:'true',
    format: 'hh:mm',
     autoclose: true
});

</script> 




<script type="text/javascript">
$(document).ready(function()

{


    $(".delete_event").click(function()
    {
     
      swal({
  title: "Are you sure?",
  text: "you will not be able to recover this Event!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Event Removed", {
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
 




















