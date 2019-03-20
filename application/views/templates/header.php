
<!DOCTYPE html>
<html>

  <title></title>
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/off/boot.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="icon" href="" type="image/gif" sizes="16x16">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alumni Camp</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css1/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url();?>assets/css1/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url();?>assets/css1/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/scss1/mdb.lite.scss" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/scss1/card-carousel.scss" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
*
{
  font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
}
  html {
  scroll-behavior: smooth;
}
  body
  {
    width: 100%;
    
  }
  #button {
  display: inline-block;
background-color: #3498db;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}
#loading {
    background: url('') no-repeat center center;
    position: absolute;
    top: 350px;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}
.navbar .dropdown-menu a {
    padding: 10px;
    font-size: .9375rem;
    font-weight: 300;
    color: #000;
    font-size: initial;
}
.navbar.navbar-dark .navbar-nav .nav-item .nav-link {
    color: #fff;
    -webkit-transition: .35s;
    -o-transition: .35s;
    transition: .35s;
    font-size: initial;
}
</style>
<style type="text/css">
div.blockOverlay {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; 
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50); 
    -moz-opacity:.70;
    opacity:.70;
    background-color: #00f;
}
</style>

<body>
  <nav class="mb-1 navbar sticky-top navbar-expand-lg navbar-dark cyan">
      <a class="navbar-brand" href="<?php echo base_url();?>">AJA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>events">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>needs">Alumni Needs</a>
</li>
 <li class="nav-item">
        <div class="dropdown">
  <a  href="register" class="nav-link  dropdown-toggle" data-toggle="dropdown">More </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo base_url();?>connect">Connect</a>
    <a class="dropdown-item" href="#">Gallery</a>
<a class="dropdown-item" href="<?php echo base_url();?>faq">FAQ</a>

          <li class="nav-item">
          
         <?php if($this->session->active==0):?>

        <li class="nav-item">

              <a  href="<?php echo base_url();?>login" class="nav-link" >Login</a>
        </li>
      <?php else:?>
          <li class="nav-item">
            <div class="dropdown">
  <a  href="" class="nav-link dropdown-toggle" data-toggle="dropdown">              
                <span class="fa fa-user"> </span><?php echo " ". $this->session->fname;?></a>

              <?php endif?>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url();?>user/profile/<?php echo $this->session->user_name?>" >View Profile</a>
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href="<?php echo base_url();?>/auth/logout">Logout</a>

</li>
        </ul>
      </div>
    </nav>


 
  <a id="button" class=""></a>

<!-- <ol class="breadcrumb" id="bc">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol> -->

<script type="text/javascript" src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script  type="text/javascript" src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script  type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous">
      
</script>
  <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>      
<script type="text/javascript">
  
var btn = $('#button');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/progressbar.js"></script>
<script type="text/javascript">
function hideLoader() {
    $('#loading').hide();
}
$(window).ready(hideLoader);
setTimeout(hideLoader, 20 * 1000);
</script>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        duration:800,
      });
    </script>






<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>

