
<META HTTP-EQUIV="Pragma" CONTENT="private">
<META HTTP-EQUIV="Cache-Control" CONTENT="private, max-age=5400, pre-check=5400">
<META HTTP-EQUIV="Expires" CONTENT="<?php echo date(DATE_RFC822,strtotime("1 day")); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reg.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    
  </head>
  <body>
    <div class="custom">
      <img src="<?php echo base_url();?>assets\images\form\book1.jpg" alt="" class=" img_size">
    </div>
    <div class="container des">
      <div class="row">
        <div class="col-lg-7">
          <h2 class="quotes">Connect Today<br>Transform Tommorrow. <br> Its Not Just Our Mission<br> Its Our Wish For You</h2>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <br>
          <div class="card card_custom">
            <h4 align="center" class="card_head">Preferences</h4>
               <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
         <?php }?>
           <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-danger"><?php echo $_SESSION['error'];?></div>
         <?php }?>
           <?php if(isset($_SESSION['warning'])){?>
            <div class="alert alert-warning"><?php echo $_SESSION['warning'];?></div>
         <?php }?>
          
            <form class="form-group" id="rform" method="post" action="" >
              <div class="row">
                <div class="col-lg-6">
                  <label class="col-form-label" for="">Course</label>
                <select name="course" id="branch" class="custom-select "  value="<?php echo set_value('branch'); ?>">
                     <option label=" "></option>
                     <?php
                  foreach($course as $row)
                  {

                    echo"<script>console.log('<?php echo($row->name)?>')</script>";
                echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                }
              ?>
                  </select>
                    <?php echo form_error('course','<div class="text-danger">','</div>'); ?>
                </div>
                <div class="col-lg-6">
                  <label class="col-form-label" for="">Branch</label>
                  <select name="branch" id="branch" class="custom-select "  value="<?php echo set_value('branch'); ?>">
                     <option label=" "></option>
                     <?php
                  foreach($branch as $row)
                  {
                echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                }
              ?>
                  </select>
                   <?php echo form_error('branch','<div class="text-danger">','</div>'); ?>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label class="col-form-label" for="">Year of Entry</label>
                  <input type="number" name="ye" min="1986" id="ye" max="2099"step="1"  value="<?php echo set_value('ye'); ?>"class="form-control"  />
                    <?php echo form_error('ye','<div class="text-danger">','</div>'); ?>
                </div>
                <div class="col-lg-6">
                  <label class="col-form-label" for="">Year of Graduation</label>
                  <input type="number" min="1989" name="yg" max="2099" id="yg" step="1" value="<?php echo set_value('yg'); ?>"class="form-control"  />
                    <?php echo form_error('yg','<div class="text-danger">','</div>'); ?>
                </div>
              </div>

              <label class="col-form-label" for="">Roll No</label>
              <input type="text" class="form-control" placeholder="" id="rno" name="rno"> 
            


              <label class="col-form-label" for="">DOB</label>
              <input type="date" class="form-control" placeholder="" name="dob" id="dob"  value="<?php echo set_value('dob'); ?>">
                <?php echo form_error('dob','<div class="text-danger">','</div>'); ?>
              
              <label class="col-form-label" for="">Place</label>
              <input type="text" class="form-control" placeholder="" name="place" id="searchTextField"  value="<?php echo set_value('place'); ?>">
                  <?php echo form_error('place','<div class="text-danger">','</div>'); ?>
                  <br>
                 <div class="g-recaptcha" data-sitekey="6LfNvpsUAAAAAISRSERkEFOUVDPlXum7r0-L2H3m"></div>
              <div class="container-fluid">
                <br>
                <input type="submit" class="btn btn-info btn-lg " name="createaccount" value="Create Account">
                <br>
              </div>
            </form>
          </div>
          <br>
          
        </div>
      </div>
    </div>


<!-- 
    <script type="text/javascript">
      

      $(document).ready(function()
      {

       $('#course').change(function(){
  var course_id = $('#course').val();

  if(course_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>auth/fetch_course",
    method:"POST",
    data:{course_id:course_id},
    success:function(data)
    {
     $('#branch').html(data);

    }
   });
  }

 });


     });

     
    </script> -->
    
   <script type="text/javascript">
    
    function search1()
    {
    var input = document.getElementById('searchTextField');

    autocomplete = new google.maps.places.Autocomplete(input);
    }
    </script>   
 


  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6A-04NLlDN0ImEPTkgCFoVh2SOqdR-70&libraries=places&callback=search1"></script>





  </body>

<script src='https://www.google.com/recaptcha/api.js'></script>