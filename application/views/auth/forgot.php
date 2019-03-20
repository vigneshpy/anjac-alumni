<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->




<br>
<br>

<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
 <script src='https://www.google.com/recaptcha/api.js?render=6Ldg8YoUAAAAAGj1QBN8JmSCPAv4vICmDiU8JPeX'></script>
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
        
        <h4 align="center">Reset Password</h4>
         
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
         <input type="hidden" id="recaptcha1" name="g-recaptcha-response"  />
          <div class="form-group" align="center">

            <input type="submit" value="Reset Password" style="width:200px;" class=" float-center login_btn" name="forgot">
          </div>
          
        <?php echo form_close(''); ?>
      </div>
  
    </div>
  </div>
</div>
<br>
<br>

<script>
grecaptcha.ready(function() {
grecaptcha.execute('6Ldg8YoUAAAAAGj1QBN8JmSCPAv4vICmDiU8JPeX', {action: 'hom'})
.then(function(token) {
document.getElementById('recaptcha1').value=token;

console.log()
});
});
</script>


<script src='https://www.google.com/recaptcha/api.js?render=6Ldg8YoUAAAAAGj1QBN8JmSCPAv4vICmDiU8JPeX'></script>
