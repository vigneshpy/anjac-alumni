    <style type="text/css">
@media screen and (max-width: 1400px) {
    form { 
    top: 50px;
margin: 0 auto; 
width:450px;
}

}

</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-clockpicker.css">
<br>
<br>

<div class="container-fluid" style="">
	
<form class="border border-light p-5" method="POST"  id="target">

    <p class="h4 mb-4 text-center">Add Events</p>
 <label class="custom-control-label" for="defaultLoginFormRemember">Event Name</label>
   
    <input type="text" id="" class="form-control mb-4" name="ename" placeholder="Event Name" style="">
     <?php echo form_error('ename','<div class="text-danger">','</div>'); ?>

<br>
<label class="custom-control-label" for="defaultLoginFormRemember" >Description</label>

    <input type="text" id="" class="form-control mb-4" placeholder="Description" name="edescription" >
     <?php echo form_error('edescription','<div class="text-danger">','</div>'); ?>

<br>

 <label class="custom-control-label" for="defaultLoginFormRemember">Event Date</label>

    <input type="date" id="" class="form-control mb-4" placeholder="Event Date" name="edate" >
<?php echo form_error('edate','<div class="text-danger">','</div>'); ?>
<br>

 <label class="custom-control-label" for="defaultLoginFormRemember" name="etime" >Event Time</label>

<div class="input-group clockpicker">
    <input type="text" class="form-control" value="10:00" name="etime" >
 <?php echo form_error('etime','<div class="text-danger">','</div>'); ?>
    
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
    
</div>
<br>
 <label class="custom-control-label" for="defaultLoginFormRemember" name="eimage" >Image(optional)</label>
<br>
<span class="btn btn-file" style="color: black !important"><input type="file" style="color: black !important"/></span>
 <?php echo form_error('eimage','<div class="text-danger">','</div>'); ?>


<button class="btn btn-success btn-block my-4" id="sub" name="esubmit" value="Add Event">Add Event</button>
    <a class="btn btn-info btn-block my-4"  name="" href="<?php echo base_url();?>admin/view-event">View Events</a>


</form>
	
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-clockpicker.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'set',
    hour12Timer:'true',
    format: 'hh:mm'
});
</script>
<script type="text/javascript">
$(function() {
   $("#sub").click(function(){
      if (confirm("Click OK to continue?")){

         $('#target').submit();
      }
      else
      {
        return false;
      }
   });
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>