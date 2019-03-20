<br>
<br>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/forgot.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<body>
<div class="container-fluid">

<div class="container">
  <div class="d-flex justify-content-center h-100">
  <br>
  <br>
    <div class="card " style="width:440px;height: 50%">
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
        	<label class="text-center" style="color:white;">New Password</label>
          <div class="input-group form-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>

            <input type="password" class="form-control" name="p1" placeholder="New Password">
          </div>
           <?php echo form_error('p1','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>
            <br>
              <div class="input-group form-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>

            <input type="password" class="form-control" name="p2" placeholder="Confirm Password" value="">
          </div>
           <?php echo form_error('p2','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>

                  
          </div>
         
         
      
         
          <div class="form-group" align="center">
            <input type="submit" value="Reset Password" style="width:200px;" class=" float-center login_btn reset_btn" name="forgot">
          
          </div>
        <?php echo form_close(''); ?>
      </div>
  
    </div>
  </div>
</div>


</div>

</body>
