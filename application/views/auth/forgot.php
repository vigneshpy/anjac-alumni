<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <title></title>
  </head>
  <body>
    <br>
    <div class="container">
    <form  class="" method="POST">

      <div class="row d-flex justify-content-center">
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
              <p class="text-center">To reset your password,enter your email and click reset password</p>
              <br>
              <div class="text-center">
          

              </div>
              <!--Body-->
              <div class="">

    <input
 type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
<?php echo form_error('email','<div class="text-danger"style="text-shadow: 1px 1px black;">','</div>'); ?>

              </div>
              <div class="text-center mt-4">
                <input  class="btn btn-info my-4" type="submit" name="forgot" value="Reset password">
              <br>
            </div>
          </div>
        </div>
      </div>

    </div>

    </form>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
  </body>
</html>
