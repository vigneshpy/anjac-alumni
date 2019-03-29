<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="<?php echo base_url();?>assets/css1/eventcss.css" rel="stylesheet">
  </head>
  <body>
    <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Propose an event</strong></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card text-center mb-3" style="padding:10px;padding-left:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Event Registration</strong></h4>

          
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
                      <input type="text" class="form-control" placeholder="First name" name="fname">
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="Last name" name="lname">
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Material input -->
                <br>
                <p class="h5">Event details</p>
                <div class="md-form">
                  <input type="text" id="form1" class="form-control" name="event_title">
                  <label for="form1">Event title</label>
                </div>
                <div class="md-form amber-textarea active-amber-textarea">
                  <!-- <i class="fas fa-pencil-alt prefix" style="float:left;"></i> -->
                 
                  <input type="text" id="form1" class="form-control" name="des" height="500">
                 

                  <label for="form22">Event description</label>
                </div>
                <div class="md-form">
                  <input type="date" id="form1" class="form-control" name="event_date">

                  <label for="inputMDEx">Event date</label>
                </div>
                
                <p class="h5">Students to participate</p>
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline1" name="sp[]" value="1st">
                  <label class="custom-control-label" for="defaultInline1" >1st year</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline2" name="sp[]" value="2nd">
                  <label class="custom-control-label" for="defaultInline2" value="2nd">2nd year</label>
                </div>

                <!-- Default inline 3-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline3"  name="sp[]" value="3rd">
                  <label class="custom-control-label" for="defaultInline3" value="3rd">3rd year</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="number" id="numberExample" class="form-control" name="no_students">
                  <label for="numberExample">Maximum number of participants</label>
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