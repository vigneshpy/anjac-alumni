<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <title></title>
    <style media="screen">
 
    </style>
  </head>
  <body>

  
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7">
          <div class="text-center">
            <img src="<?php echo base_url();?>assets/images1/board1.png" alt="" class="img-fluid" width=290 height=130>
              <h6 class="text-center centered" style="color: white;"><strong><?php echo $this->session->course;?> -<?php echo $this->session->branch;?></strong> </h6>
                <br>
              <h6 class="text-center centered1" style="color: white;"><strong><?php echo $this->session->yg;?> -<?php echo $this->session->ye;?></strong> </h6>
              <br>
              <br>
              
               
          </div>
        </div>
      </div>

       <h4 align="center">Your Class Mates</h4><br>
      <div class="row">
        <?php foreach ($data as $row):?>
      
        <div class="col-md-3 mb-3 text-center">
      <img src="<?php echo $row['profile_pic']?>" width="200"class="img-fluid z-depth-3 rounded-circle"
              alt="Responsive image">
        <h5 class="mt-4 mb-0"><strong class="text-uppercase"><?php echo $row['fname']?></strong></h5>
        <div class="container">
        <!-- Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12 py-3">
           
             <h6 class="card-text"><?php echo $row['course']?>-<?php echo $row['branch']?></h6>
    <h6 class="card-text"><?php echo $row['year_entry']?>-<?php echo $row['year_grad']?></h6>
  
  
       
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </div>
        <button type="button" class="btn btn-info">View profile</button>
        </div>
       
      <?php endforeach?>

</div>

    </div>
 




  <body>
 
    <br>

    

  </body>
</html>

   
<script type="text/javascript">
// Tooltips Initialization
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

  </body>
</html>
<style type="text/css">
  .centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}  .centered1 {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<script type="text/javascript">
  $('#classroom').on('submit', function(e){
 
  $('#basicExampleModal').modal('show');
   e.preventDefault();

});
</script>
<script type="text/javascript">
  $('#sure').on('click',function()
  {
  alert($('.btn').val());
  });
</script>
      </div>
<br><br>
</form>
<script type="text/javascript">
// Tooltips Initialization
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

  </body>
</html>
<style type="text/css">
  .centered {
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
}  .centered1 {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<script type="text/javascript">
  $('#classroom').on('submit', function(e){
 
  $('#basicExampleModal').modal('show');
   e.preventDefault();

});
</script>
<script type="text/javascript">
  $('#sure').on('click',function()
  {
  alert($('.btn').val());
  });
</script>