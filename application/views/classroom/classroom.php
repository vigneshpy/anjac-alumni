<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <title></title>
    <style media="screen">
      body{
        background: #CAC531;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F3F9A7, #CAC531);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F3F9A7, #CAC531); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      }
    </style>
  </head>
  <body>
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to sit in this place
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">I'm sure</button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <form method="POST">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7">
          <div class="text-center">
            <img src="<?php echo base_url();?>assets/images1/board1.png" alt="" class="img-fluid" width=290 height=130>
              <h6 class="text-center centered" style="color: white;"><strong><?php echo $this->session->course;?> -<?php echo $this->session->branch;?></strong> </h6>
                <br>
              <h6 class="text-center centered1" style="color: white;"><strong><?php echo $this->session->yg;?> -<?php echo $this->session->ye;?></strong> </h6>
             
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!-- <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="submi" class="btn blue lighten-2" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="1" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="2" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="3" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="4" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" value="5" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="6" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="7" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="8" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="9" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>

        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="submit" value="10" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="11" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="12" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="13" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="14" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" value="15" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="16" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="17" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="18" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="19" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="submit" value="20" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="21" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="22" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="23" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="24" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" value="26" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="27" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="28" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="29" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="30" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="submit" value="31" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="32" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="33" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="34" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="35" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" value="36" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="37" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="38" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="39" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="40" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="submit" value="41" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="42" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="43" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="44" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="45" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" value="46" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="47" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="48" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="49" class="btn blue lighten-2"><i class="fas fa-user" aria-hidden="true"></i></button>
            <button type="submit" value="50" class="btn blue lighten-2" data-toggle="tooltip" data-placement="top" title="@user"><i class="fas fa-user" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      </div>
<br><br>
</form>
<script type="text/javascript">
// Tooltips Initialization
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

  </body>
</html>
<style type="text/css">
  .centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}  .centered1 {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>