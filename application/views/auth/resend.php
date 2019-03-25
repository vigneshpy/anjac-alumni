



<br>
<br>

<!DOCTYPE html>
<html>
<head>
  <title>Resend Email</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/forgot.css">

 
</head>
<style type="text/css">

body
{
	color:white;
}

	
</style>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
  <br>
  <br>
    <div class="card " style="width:440px;">
      <div class="card-header">
        
        <h4 align="center">Resend Activation Link</h4>
         
      </div>
        <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
         <?php }?>
       
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>
         <?php if(isset($_SESSION['warning'])){?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning']?></div>
         <?php }?>
       
      <div class="card-body" >
        <?php echo form_open(''); ?>
        	<label class="text-center" style="color:white;">Your Email</label>
          <div class="input-group form-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>

            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
          </div>
           <?php echo form_error('email','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>
            <br>
            <div class="form-group" align="center">
      
         </div>
         <br>
         
          <div class="form-group" align="center">

            <input type="submit" value="Resend Email" style="width:200px;" class=" float-center login_btn" name="resend">
          </div>
          
        <?php echo form_close(''); ?>
      </div>
  
    </div>
  </div>
</div>
<br>
<br>


