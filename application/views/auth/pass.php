<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
 

  </head>
  <body>
    <div class="container">

      <form method="POST">
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-5">
          <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
         <?php }?>
       
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>
         <?php if(isset($_SESSION['warning'])){?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning']?></div>
         <?php }?>
       

            <div class="card-body">

              <!--Header-->
              <div class="text-center">
                <h4 class="">Reset password</h4>
                <hr class="hr">
              </div>
              <br>
              <p class="text-center">Please ensure that your password is completely different than your previous password</p>

              <div class="text-center">
                <img src="<?php echo base_url();?>/assets/images1/password.jpg" alt="" style="height:150px;width:150px;">

              </div>
              <!--Body-->
              <div class="">

                <input type="password" id="form4" class="form-control" placeholder="new password"  name="p1">
        <?php echo form_error('p1','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>
              </div>
              <br>
              <div class="">

                <input type="password" id="form4" class="form-control" placeholder="confirm password" name="p2">
          <?php echo form_error('p2','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>
              </div>
              <div class="text-center mt-4">
                <button class="btn btn-info my-4" type="submit">Reset password</button>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    <br>
    <br>
    <br>


  </body>
</html>
