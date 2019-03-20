<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reg.css">
</head>
<body>
  <style type="text/css">
    .login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}


  </style>


   
<div class="custom">
<img src="<?php echo base_url();?>assets/images/form/register.jpg" alt="" class=" img_size">
</div>
<div class="container des">

    <div class="row">
      <div class="col-lg-7">
        <h2 class="quotes">"College is something you Complete,<br>Life is something our Experience"</h2>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12">
        <br>
        <div class="card card_custom">
          <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>
          <h4 align="center" class="card_head">Basic Info</h4>
          <form class="form-group" id="rform" action="" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <label class="col-form-label" for="">First name</label>

                           <input type="text" name="fname" id="fname" placeholder="Joe" 
                           class="form-control"  value="<?php echo set_value('fname'); ?>">
                            <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
                          
           
              </div>

              <div class="col-lg-6">
                <label class="col-form-label" for="">Last name</label>
                            <input type="text" name="lname" id="lname" placeholder="Doe"  value="<?php echo set_value('lname'); ?>" class="form-control"  >
                          <?php echo form_error('lname','<div class="text-danger">','</div>'); ?>

            
              </div>
            </div>
      
            <label class="col-form-label" for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com" value="<?php echo set_value('email'); ?>"  class="form-control">
                <?php echo form_error('email','<div class="text-danger">','</div>'); ?>

            
          <label class="col-form-label">Mobile</label>
             <div class="country"></div>
              
<input type="number" class="tel form-control" name="pno" x-autocompletetype="tel" id="pno"placeholder="Mobile Number" value="<?php echo set_value('pno'); ?>">

<?php echo form_error('pno','<div class="text-danger">','</div>'); ?>
  

  <span id="pno1" class="text-danger" ></span>
            
            <label class="col-form-label" for="">Password</label>
         
              <input type="password" name="p1" id="p1" placeholder="Password"  value="" class="form-control">
           
        <?php echo form_error('p1','<div class="text-danger">','</div>'); ?>

            <label class="col-form-label" for="">Confirm Password</label>
            <input type="password" name="cp" id="p2" placeholder="Confirm Password" class="form-control"  >

            <?php echo form_error('cp','<div class="text-danger">','</div>'); ?>
           
            
           <div class="container-fluid">
            <br>
             <input type="submit" id="submit" name="submit" value="Proceed" class="btn btn-success" />
          </div>
          </form>

        </div>
       
          
   
   </div>
    </div>

    </div>
 

</body>

<html>
