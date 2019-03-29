<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php include 'header.php'; ?>
    <meta charset="utf-8">
    <title>Add need</title>
    <link rel="stylesheet" href="css/bootstrap-fullscreen-select.css">
    <link rel="stylesheet" href="css/needs.css">

    <script src="js/bootstrap-fullscreen-select.min.js">

    </script>

  </head>
  <body>
    <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Add your need</strong></h2>

    <hr>


        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class=" text-center mb-3" style="padding:10px;padding-left:20px;">
                <p class="h5">Select category</p>

                <div class="form-group">

                <!-- <select class="custom-select">
                  <option selected="">Category</option>
                  <option value="1">Higher Education</option>
                  <option value="2">Job oriented</option>
                  <option value="3">others</option>
                </select> -->
                <select class="form-control mobileSelect" data-title="Needs category" data-animation='bottom'>

                  <option value="Higher Education">Higher Education</option>
                  <option value="Job oriented">Job oriented</option>
                  <option value="information">information</option>
                  <option value="others">others</option>
                  <!-- <i class="fas fa-caret-down"></i> -->
                </select>

              </div>
                <!--Textarea with icon prefix-->
                <div class="md-form amber-textarea active-amber-textarea">
                  <!-- <i class="fas fa-pencil-alt prefix"></i> -->
                  <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form22">Type here</label>
                </div>
                <button type="button" class="btn btn-info">Post</button>

                </div>
              </div>
            </div>
          </div>
    <?php include 'footer.php'; ?>

    <script type="text/javascript">
      $('.mobileSelect').mobileSelect();
    </script>
  </body>
</html>
