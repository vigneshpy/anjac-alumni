<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css1/event.css">
<style type="text/css">
/*preloader css*/
.box{
    width: 250px;
    height:300px;
    padding: 10px;
    margin: 100px auto 0px auto;
    box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

span{
    display: block;
}

.circle{
    width: 80%;
    height: 70%;
    border-radius: 0%;
    background: #e1e9ee;
    margin-bottom: 10px;
}

.title{
    width: 150px;
    height: 10px;
    background: #e1e9ee;
    margin-bottom: 10px;
}

.line{
    width: 80%;
    height: 10px;
    background: #e1e9ee;
    margin-bottom: 10px;
}

.box:after{
    content: "";
    background-color: #333;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    animation-duration: 0.6s;
    animation-iteration-count: infinite;
    animation-name: loader-animate;
    animation-timing-function: linear;
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.6) 30%, rgba(255, 255, 255, 0) 81%);
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white !important;
  opacity: 1; /* Firefox */
}



@keyframes loader-animate{
    0%{
        transform: translate3d(-100%, 0, 0);
    }
    100%{
        transform: translate3d(100%, 0, 0);
    }
}
</style>

 </head>


<body>
  <html lang="en" class="full-height">
    <body>

      
        <div class="view" >
          <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
            <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
          </video>
          <!-- Mask & flexbox options-->
          <div class="mask rgba-gradient align-items-center" >
            <!-- Content -->
            <div class="container px-md-3 px-sm-0">
              <!--Grid row-->
              <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                  <h3 class="display-4 font-weight-bold white-text mb-0 pt-md-5 pt-5">Connect With Your Colleagues</h3>
                  <hr class="hr-light my-4 w-75">
                  <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.</h4>
                  <a href="<?php echo base_url();?>connect/your-class-room" class="btn btn-rounded btn-outline-white">
                    <i class="fas fa-home"></i> Go to your classroom
                  </a>
                    <div class="row align-items-center justify-content-center"  align="center">

     <div class="col-md-8">
<form class="form-inline md-form form-sm mt-0">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" name="search_text" placeholder="Search  user by name or email or anything" aria-label="Search" data-toggle="tooltip" title="search here" id="search_text" style="color:white;">
</form>
                      </div>
</div>
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
   
      <!--Main Layout-->

<br>
  
<style type="text/css"></style>


 <br>
 <div id="loader-wrapper">
  <div id="loader"></div>
</div>
    <div class="" id="result"></div>

<div class="box">
    <span class="circle"></span>
    <span class="title"></span>
    <span class="line"></span>
    <span class="line"></span>
</div>
           




</body>
<script>
$(document).ready(function(){
   $(".box").hide();
  function load_data(query)
  {
    $.ajax({
      url:"<?php echo base_url();?>connect/ajax_search",
      method:"GET",
      data:{query:query},
       beforeSend: function() {
               $(".box").show(); 
           },
      success:function(data)
      {
        $('#result').html(data);
         $(".box").hide();
      }
    });
  } 
  $('#search_text').keyup(function(){
    var search =$(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
    e.preventDefault();
    var param = $(this).attr("href").replace("#","");
    var concept = $(this).text();
    $('.search-panel span#search_concept').text(concept);
    $('.input-group #search_param').val(param);
  });
});
</script>

