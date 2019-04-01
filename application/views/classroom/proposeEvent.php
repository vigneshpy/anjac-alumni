<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'header.php'; ?>
    <link href="css/eventcss.css" rel="stylesheet">
  </head>
  <body>
    <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Propose an event</strong></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class=" text-center mb-3" style="padding:10px;padding-left:20px;">
            <div class="">
              <h4 class=""><strong>Event Registration</strong></h4>

              <hr style="color:rgba(42, 27, 161, 0.7);">
              <br>
              <!-- Material form grid -->
              <form>

                <p class="h5">Co-ordinator information</p>
                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="First name">
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col">
                    <!-- Material input -->
                    <!-- <div class="md-form mt-0"> -->
                      <input type="text" class="form-control" placeholder="Last name">
                    <!-- </div> -->
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Material input --><hr>
                <p class="h5">Event details</p>
                <div class="md-form">
                  <input type="text" id="form1" class="form-control">
                  <label for="form1">Event title</label>
                </div>
                <div class="md-form amber-textarea active-amber-textarea">
                  <!-- <i class="fas fa-pencil-alt prefix" style="float:left;"></i> -->
                  <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form22">Event description</label>
                </div>
                <div class="md-form mx-5 my-5">
                  <input type="datetime-local" id=" inputMDEx" class="form-control">
                  <label for="inputMDEx">Event date</label>
                </div>
                <hr>
                <p class="h5">Students to participate</p>
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline1">
                  <label class="custom-control-label" for="defaultInline1">1st year</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline2">
                  <label class="custom-control-label" for="defaultInline2">2nd year</label>
                </div>

                <!-- Default inline 3-->
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="defaultInline3">
                  <label class="custom-control-label" for="defaultInline3">3rd year</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="number" id="numberExample" class="form-control">
                  <label for="numberExample">Maximum number of participants</label>
                </div>
                <hr>
                <p class="h5">Image for the event</p>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
                <br>
                <button type="button" class="btn btn-info">Register</button>
              </div>
              </form>
              <!-- Material form grid -->
            </div>
          </div>
        </div>
      </div>







    <br>
    <br>
    <br>
    <?php include 'footer.php'; ?>

  </body>
</html>
