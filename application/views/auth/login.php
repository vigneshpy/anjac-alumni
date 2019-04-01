<?php

  $this->load->helper('url');


            $this->session->set_userdata('last_page', current_url());?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css1/login.css">
    <title></title>

  </head>
  <body>

        <!-- Main navigation -->
        <header>
          <!-- Full Page Intro -->
                    <div class="view" style="background-image: url('<?php echo base_url();?>assets/images1/party.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                      <!-- Mask & flexbox options-->
                      <div class="mask rgba-gradient align-items-center">
                        <!-- Content -->
                        <div class="container">
                          <br>
                          <br>
                          <br>

                          <!--Grid row-->
                          <div class="row mt-5">
                            <!--Grid column-->

                              <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Sign in to your account to enjoy the full features of this website including
                                needs section,event proposal,classroom and much more..</h6>
                                <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                              </div>


                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6 col-xl-5 mb-4">
                              <!--Form-->
                              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                  <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']?><a href="<?php echo base_url();?>/register">Signup</a></div>
         <?php }?>
       
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>
         <?php if(isset($_SESSION['warning'])){?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning']?><a href="<?php echo base_url();?>/auth/resend_mail">Resend Mail</a></div>
         <?php }?>

                                <div class="card-body">
                                  <!--Header-->
                                  <div class="text-center">
                                    <h4 class="">Sign in to your account</h4>
                                    <hr class="hr">
                                  </div>
                                  <!--Body-->
                                  <form method="POST">
                                  <div class="md-form">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="form2" class="form-control" name="useremail">
                                      <?php echo form_error('useremail','<div class="text-danger">','</div>'); ?>

                                    <label for="form2" class="">Your email</label>
                                  </div>
                                  <div class="md-form">
                                    <i class="fas fa-lock prefix"></i>

                                    <input type="password" id="form2" class="form-control" name="userpass">

   
                                 
                                    <label for="form4">Your password</label>
                                  </div>
                                    <?php echo form_error('userpass','<div class="text-danger">','</div>'); ?>
                                                                   <div class="text-center mt-4">
                                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                                
                                  </div>
                                  <br>

                                  <div class="d-flex justify-content-around">
                                    <div>
                                        <!-- Forgot password -->
                                        <a href="<?php echo base_url();?>/forgot">Forgot password?</a>
                                    </div>
                                   <div>
                                       <!-- Remember me -->
                                       <p class="text-center">Not a member?
                                           <a href="<?php echo base_url();?>/register">Register</a>
                                       </p>
                                   </div>

                               </div>
                                </div>
                              </div>
                              <!--/.Form-->
                            </div>
                            <!--Grid column-->
                          </div>
                          <!--Grid row-->
                        </div>
                        <!-- Content -->
                      </div>
                      <!-- Mask & flexbox options-->
                    </div>
                    <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->
        <main>

        </main>
        <!--Main Layout-->


  
  </body>
</html>
<script type="text/javascript">
$('input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea').each(function (element, i) {
 if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== undefined) {
  $(this).siblings('label').addClass('active');
 }
 else {
  $(this).siblings('label').removeClass('active');
 }
});
$('input[type=email],input[type=password]').val('').siblings('label').addClass('active');
</script>