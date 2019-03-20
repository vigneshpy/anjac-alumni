<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

      <link href="<?php echo base_url();?>assets/css1/eventcss.css" rel="stylesheet">
      <!-- <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/> -->

      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slick/slick-theme.css">
  </head>
  <body>


<!-- Modal -->
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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Co-ordinator profile</button>
      </div>
    </div>
  </div>
</div>
    <!-- Full Page Intro -->
        <div class="view" style="background-image: url('<?php echo base_url();?>assets/images1/eventsbg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <!-- <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
            <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
          </video> -->
          <!-- Mask & flexbox options-->
          <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container px-md-3 px-sm-0">
              <!--Grid row-->
              <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                  <h3 class="display-4 font-weight-bold white-text mb-0 pt-md-5 pt-5">Events</h3>
                  <hr class="hr-light my-4 w-75">
                  <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.</h4>
                  <a href="<?php echo base_url();?>events/propose-an-event" class="btn btn-rounded btn-outline-white">
                    <i class="far fa-calendar-alt"></i> Propose an event
                  </a>
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
      <h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Upcoming Events</strong></h2>
      <div class="container">
        <div class="card-carousel" style="padding-bottom:20px;">
          <!-- Card -->
<div class="card" style="bottom:10px;">

  <!-- Card image -->
  <img class="card-img-top" src="images/meet.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>Alumni meet</a></h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <hr>
    <p class="card-text">30 feb 2019</p>
    <!-- Button -->
    <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">Know more</button>

  </div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

  <!-- Card image -->
  <img class="card-img-top" src="images/photography.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>conference on photography</a></h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <hr>
    <p class="card-text">30 feb 2019</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Know more</a>

  </div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

  <!-- Card image -->
  <img class="card-img-top" src="images/party.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>Alumni party</a></h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <hr>
    <p class="card-text">30 feb 2019</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Know more</a>

  </div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

  <!-- Card image -->
  <img class="card-img-top" src="images/skull.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>seminar on skull theory</a></h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <hr>
    <p class="card-text">30 feb 2019</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Know more</a>

  </div>

</div>

<!-- Card -->

        </div>
      </div>
<br>
<div class="#fafafa grey lighten-5" style="padding:10px;">
<h2 class="text-center mt-5 mb-5 pb-2 text-dark"><strong>Wraped up Events</strong></h2>

<div class="container">
  <div class="card-carousel" style="padding-bottom:20px;">
    <!-- Card -->
<div class="card" style="bottom:10px;">

<!-- Card image -->
<img class="card-img-top" src="images/Convocation.jpg" alt="Card image cap">

<!-- Card content -->
<div class="card-body">

<!-- Title -->
<h4 class="card-title"><a>Convocation</a></h4>
<!-- Text -->
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<!-- Button -->
<a href="#" class="btn btn-primary">Know more</a>

</div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

<!-- Card image -->
<img class="card-img-top" src="images/django.png" alt="Card image cap">

<!-- Card content -->
<div class="card-body">

<!-- Title -->
<h4 class="card-title"><a>Alumni lecture by Vignesh</a></h4>
<!-- Text -->
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<!-- Button -->
<a href="#" class="btn btn-primary">Know more</a>

</div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

<!-- Card image -->
<img class="card-img-top" src="images/game.jpg" alt="Card image cap">

<!-- Card content -->
<div class="card-body">

<!-- Title -->
<h4 class="card-title"><a>Workshop on game art design</a></h4>
<!-- Text -->
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<!-- Button -->
<a href="#" class="btn btn-primary">Know more</a>

</div>

</div>

<!-- Card -->
<!-- Card -->
<div class="card" style="bottom:10px;">

<!-- Card image -->
<img class="card-img-top" src="images/indiatoday.jpg" alt="Card image cap">

<!-- Card content -->
<div class="card-body">

<!-- Title -->
<h4 class="card-title"><a>Lecture on India today</a></h4>
<!-- Text -->
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<!-- Button -->
<a href="#" class="btn btn-primary">Know more</a>

</div>

</div>

<!-- Card -->

  </div>
</div>

</div>


  <br>
  <br>
  <br>

  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.card-carousel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.selector').slick({
  nextArrow: '<i class="fa fa-arrow-right"></i>',
  prevArrow: '<i class="fa fa-arrow-left"></i>',
// add the rest of your options here
});
});
</script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  </body>
</html>
