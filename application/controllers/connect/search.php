<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="js/jquery.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <div id="loading"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <p class="text-muted" id="description">Search your friend or classmate or anyone whom you want to communicate</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="container-secondary">
            <div class="row">
              <div class="col-lg-4 mx-auto">
                <!-- <button type="button" name="button" id="clsroombutton">Go to my classroom</button> -->
                <a href="classroom.php"><button type="button" name="button" id="clsroombutton">Go to my classroom</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-7 col-sm mx-auto">
                <form method="post">
                  <input type="text" class="textbox" placeholder="Search alumni" id="searchbox">
                  <input title="Search" value="" type="submit" class="button">
                </form>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-4 mx-auto ">
                <h5>Search by category</h5>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-4">
                <h6>Year of passing :</h6>
                <select class="custom-select">
                  <option selected="">2018</option>
                  <option value="1">2019</option>
                  <option value="2">2020</option>
                  <option value="3">2021</option>
                </select>
              </div>
              <div class="col-lg-4">
                <h6>Course :</h6>
                <select class="custom-select">
                  <option selected="">Bsc(cs)</option>
                  <option value="1">Bsc(Maths)</option>
                  <option value="2">BCA</option>
                  <option value="3">B.Com</option>
                </select>
              </div>
              <div class="col-lg-4">
                <h6>Region :</h6>
                <select class="custom-select">
                  <option selected="">India</option>
                  <option value="1">Australia</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
