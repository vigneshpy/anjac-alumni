   <?php if(isset($_SESSION['job_app'])){?>
   <script type="text/javascript">
     swal({
  title: "Great",
  text: "Your Job offer Requested,It Needs An Approval",
  icon: "success",
});
   </script>  

            <?php }?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alumni Camp</title>

  </head>

  <body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        duration:800,
      });
    </script>
    <!--Navbar -->
   
  <!--/.Navbar -->
    <header>
      <!-- Full Page Intro -->
      <div class="view" style="background-image: url('<?php echo base_url();?>assets/images1/bg1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center">
          <!-- Content -->
          <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-12 mb-4 white-text text-center  align-self-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Alumni Camp</strong></h1>
                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Ayya Nadar Janaki Ammal College</strong></h5>
                <?php if(isset($this->session->active)==0):?>
                <a class="btn btn-white wow fadeInDown" data-wow-delay="0.4s" href="<?php echo base_url();?>login">Login</a>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s"
                href="<?php echo base_url();?>register">Signup</a>
                <?php else:?>
             <!--    <i class="fas fa-chevron-circle-down"></i>< -->
              <a href="<?php echo base_url();?>user/profile/<?php echo $this->session->user_name?>" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Your Portfolio</a>
      <a href="<?php echo base_url();?>propose-an-job-offer" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Offer An Job</a>

                <?php endif?>
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
    <h1 class="h1-responsive text-center" style="padding:5px;margin-top:20px;" >For those who step out.</h1>
    <p class="lead text-center">
      Explore the many ways to connect with the college and our 23,000 alumni
    </p>
    <div class="#fafafa grey lighten-5">
      <!-- <h2 class="h2-responsive text-center text-dark" style="padding:5px;margin-top:10px;">Jobs and Internships</h2> -->
      <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Jobs and Internships</strong></h2>
      <div class="container">
        <p class="lead text-center"  id="desc">
          It doesn’t matter if you’re looking for your very first job or are ready to begin the next chapter in a decades-long career, the Alumni Association can help you refresh your resume, review your professional brand and expand your Michigan alumni network.
        </p>
      </div>
      <div class="container-fluid">
        <div class="card-deck">
          <div class="card wow fadeInUp" data-wow-delay="0.3s" style="width: 20rem;">
            <div class="card-body">
              <h5 class="font-weight-bold mb-3">Game art designer</h5>
              <p class="mb-0">Looking for someone who knows character drawing and designing skills.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ubisoft</li>
              <li class="list-group-item">2 years industry experience</li>
              <li class="list-group-item">1.50lakhs per month</li>
            </ul>
            <div class="card-body">
              <a href="#!" class="card-link">Read more</a>
            </div>
          </div>
          <div class="card wow fadeInUp" data-wow-delay="0.5s"  style="width: 20rem;">
            <div class="card-body">
              <h5 class="font-weight-bold mb-3">Animator</h5>
              <p class="mb-0">Applying candidates must complete a full time course in multimedia or animation.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Pixar</li>
              <li class="list-group-item">Fresher</li>
              <li class="list-group-item">1lakh per month</li>
            </ul>
            <div class="card-body">
              <a href="#!" class="card-link">Read more</a>
            </div>
          </div>
          <div class="card wow fadeInUp" data-wow-delay="0.7s" style="width: 20rem;">
            <div class="card-body">
              <h5 class="font-weight-bold mb-3">UI/UX designer</h5>
              <p class="mb-0">React and Angular js developer also has strong communication skills</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Amazon</li>
              <li class="list-group-item">3 years experience</li>
              <li class="list-group-item">2 lakhs per month</li>
            </ul>
            <div class="card-body">
              <a href="#!" class="card-link">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="text-center">
      <a href="<?php echo base_url();?>propose-an-job-offer" class="btn btn-info">Offer An Job</a>
    </div>
    <br>
    <!-- <h2 class="h2-responsive text-center" style="padding:5px;margin-top:20px;">Needs</h2> -->
    <div class="view" style="background-image: url('<?php echo base_url();?>assets/images1/events.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
              <h1 class="h1-responsive font-weight-bold mt-sm-5">Get the help from other Alumni </h1>
              <hr class="hr-light">
              <h6 class="mb-4">Here you can post your needs and queries and get replies from other alumni who are registered.
              You can also reply to a need posted by other alumni which will be gratefull to him.Try post below.</h6>
              <a class="btn btn-white" href="<?php echo base_url();?>needs">View need</a>
              <a class="btn btn-outline-white" href="<?php echo base_url();?>addneed">Post needs</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
              <img src="<?php echo base_url();?>assets/images1/needs.png" alt="" class="img-fluid">
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
    <br>
    <br>


    <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Upcoming Events</strong></h2>

    <div class="container" align="center">
<div class="row" >
  <?php foreach($data as $row):?>
<div class="col-lg-4">
            

          <!-- Card -->
<div class="card" style="bottom:5px;">

  <!-- Card image -->

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
     <h4 class="card-title"><?php echo $row['event_name']?></h4>
    <!-- Text -->
    <p class="card-text"><?php echo $row['event_description']?></p>
    <hr>
    <p class="card-text"><i class="fa fa-calendar"></i><?php echo " ".$row['event_date']?></p>
    <p class="card-text"><i class="fa fa-clock"> </i> <?php echo $row['event_time']?></p>
    <!-- Button -->
    <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">Know more</button>

  </div>


</div>
  <br>

</div>
<?php endforeach?>
<!-- Card group -->
    </div>
  </div>
<br>
<br>
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('<?php echo base_url();?>assets/images1/events.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row mt-5">
            <!--Grid column-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
              <br>
              <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Connect with your mates </h1>
              <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
              <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">The connections are endless, and so is what you’ll get out of them.
              So what are you waiting for? Create your profile now and keep the conversation going.
              </h6>
              <a class="btn btn-white wow fadeInLeft" href="<?php echo base_url();?>connect/your-class-room" data-wow-delay="0.3s">My classroom</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
              <br>
              <img src="<?php echo base_url();?>assets/images1/connect_img.png" alt="" class="img-fluid">
            </div>
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-10 offset-1 mt-5">
          <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Featured Alumni</strong></h2>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mt-4">
              <div class="carousel-item text-center active">
                <div class="img-box p-1 border rounded-circle m-auto">
                  <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-1.jpg" alt="First slide">
                </div>
                <h5 class="mt-4 mb-0"><strong class="text-info text-uppercase">Paul Mitchel</strong></h5>
                <h6 class="text-dark m-0">Web Developer</h6>
                <p class="m-0 pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              </div>
              <div class="carousel-item text-center">
                <div class="img-box p-1 border rounded-circle m-auto">
                  <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-3.jpg" alt="First slide">
                </div>
                <h5 class="mt-4 mb-0"><strong class="text-info text-uppercase">Steve Fonsi</strong></h5>
                <h6 class="text-dark m-0">Web Designer</h6>
                <p class="m-0 pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              </div>
              <div class="carousel-item text-center">
                <div class="img-box p-1 border rounded-circle m-auto">
                  <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-7.jpg" alt="First slide">
                </div>
                <h5 class="mt-4 mb-0"><strong class="text-info text-uppercase">Daniel vebar</strong></h5>
                <h6 class="text-dark m-0">Seo Analyst</h6>
                <p class="m-0 pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Footer -->
   
    <!-- Footer -->
  </body>

    <!-- SCRIPTS -->
    <!-- JQuery -->
  
    <!-- Bootstrap tooltips -->

    <!-- Bootstrap core JavaScript -->

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/mdb.js"></script>
    <script type="text/javascript">
      // Animations init
      new WOW().init();
      swal(title:'hi',icon:'success');
    </script>
</html>
<?php if(!(isset($_SESSION['user_logged'])==1)):?>
  
<script type="text/javascript">
   var cancelled=0
    $(document).ready(function(){
              if(cancelled!=1){
        swal({
  title: "Hey There!",
  text: "Do You Want to Connect with Your Colleague",
  icon: "primary",
  buttons: true,
  dangerMode: false,
  closeOnEsc:false,
  closeOnClickOutside:false,
})
.then((willDelete) => {
  if (willDelete) {

 window.location = "<?php echo base_url();?>register";

  } else {
    var cancelled=1
    swal(
        {title:"Bye",
        text:'You Are Going to Miss Your Colleague',
        icon:"warning"
});
  }
});



}});

</script>

<?php endif?>