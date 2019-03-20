<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<br>
<br>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"

  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
  <br>
  <br>
    <div class="card">
      <div class="card-header">
        
        <h3 align="center">Sign In</h3>
         
      </div>
        <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']?><a href="<?php echo base_url();?>/register">Signup</a></div>
         <?php }?>
       
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>
         <?php if(isset($_SESSION['warning'])){?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning']?></div>
         <?php }?>
       
      <div class="card-body">
        <form method="POST" action="">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="useremail" placeholder="Email" value="<?php echo set_value('useremail'); ?>">
          </div>
           <?php echo form_error('useremail','<div class="text-danger">','</div>'); ?>
            <br>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="userpass" placeholder="password" >
           
          </div>
           <?php echo form_error('userpass','<div class="text-danger">','</div>'); ?>
          
          
            <br>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right" name="login">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          <p style="color:white">Don't have an account?</p><a href="register">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="<?php echo base_url();?>forgot">Forgot your password?</a>

        </div>
        <script>
grecaptcha.ready(function() {
grecaptcha.execute('6Ldg8YoUAAAAAGj1QBN8JmSCPAv4vICmDiU8JPeX', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
</script>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>