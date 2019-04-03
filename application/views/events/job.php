<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="<?php echo base_url();?>assets/css1/eventcss.css" rel="stylesheet">
  </head>
  <body>
    <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Propose an Job offer</strong></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card text-center mb-3" style="padding:10px;padding-left:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Job Registration</strong></h4>

          
              <br>
              <!-- Material form grid -->
              <form class="" method="POST">

                <p class="h5">Co-ordinator information</p>
                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="First name" name="fname" required>
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="Email" name="email" required>
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Material input -->
                <br>
                <p class="h5">Job offer details</p>
                <div class="md-form">
                  <input type="text" id="form1" class="form-control" name="job_title" required>
                  <label for="form1">Job title</label>
                </div>
                <div class="md-form amber-textarea active-amber-textarea">
                  <!-- <i class="fas fa-pencil-alt prefix" style="float:left;"></i> -->
                 
                  <input type="text" id="form1" class="form-control" name="job_summary" height="500"required>
                 

                  <label for="form22">Job Summary</label>
                </div> 
                <div class="md-form amber-textarea active-amber-textarea" required>
                  <!-- <i class="fas fa-pencil-alt prefix" style="float:left;"></i> -->
                 
                  <input type="number" id="form1" class="form-control" name="experience" height="500" required>
                 

                  <label for="form22">Experience</label>
                </div>   

                <div class="md-form amber-textarea active-amber-textarea">
                  <!-- <i class="fas fa-pencil-alt prefix" style="float:left;"></i> -->
                 
                  <input type="text" id="form1" class="form-control" name="loc" height="500">
                 

                  <label for="form22">Location</label>
                </div>
                <div class="md-form">
                  <input type="number" id="form1" class="form-control" name="salary">

                  <label for="inputMDEx">Salary</label>
                </div> 

                <div class="md-form">
                  <input type="url" id="form1" class="form-control" name="site_link" required>

                  <label for="inputMDEx">Reference Link</label>
                </div>
                
            
                
         
           
                </div>
                <br>
                <button type="submit" class="btn btn-info" name="register">Register</button>
              </div>
              </form>
              <!-- Material form grid -->
            </div>
          </div>
        </div>
      </div>
    </div>






    <br>
    <br>
    <br>


  </body>
</html>
<script type="text/javascript">
$('input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea').each(function (element, i) {
    if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
        $(this).siblings('label').addClass('active');
    }
    else {
        $(this).siblings('label').removeClass('active');
    }
});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });
</script>