<html>






<!-- <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/foundation.dd0d1bc488db.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/1/1.css">
<link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/index.fe0daf20816f.css">



<link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/profile-page.ae5eada96049.css">
<link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/common.01f1a0347f04.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.2/leaflet.css"> -->

<style>
p {
margin-bottom: 0;
}
body
{
font-size: 14px;
}
.navbar-brand 
{

display: inline-block;
padding-top: 0.32421875rem;
padding-bottom: 0.32421875rem;
margin-right: 1rem;
font-size: large;
line-height: inherit;
white-space: nowrap;
}
.navbar-nav .nav-link {
padding-right: 0;
padding-left: 0;
}  </style>


<!-- <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/themes/fourth/psg.494e787625cb.css"> -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <script type="text/javascript" src="https://static.almabaseapp.com/js/jquery-latest.min.a9a0cc296e96.js"></script> -->

<script type="text/javascript">
$(document).ready(function(){
$.toaster({ priority : 'success', title : 'Welcome', message : 'Your Profile Section'});

}

);

</script>





<body>











<div id="fullWidthContent">
  
    <div id="profile-view-page" class="profile-page-container">
        
            <div class="profile-page-header">
                <div class="profile-header-wrapper">
                    <div class="profile-header-container profile-page-row">
                        <div class="column large-6 profile-info-container">
                            <div class="profile-photo-block"title=""alt="" style="border-radius:5px;">
                                
                                    
                                
                                
<img src="<?php echo base_url();?>assets/images/prom.jpg" alt="profile pic">
                                
                                
                            </div>
                            <div class="profile-name-class-container">
                                <div class="profile-name-block">
                                    <span
                                      class="profile-name"></span>
                                </div>
                                
                                    <span class="profile-class-block">
                                    Class of <?php echo $this->session->ye;?>
                                    <a class="hyperlink"
                                       href=""></a>
                                </span>
                                
                            </div>
                        </div>
           
                        <div class="column large-6 show-for-large-up desktop-view-block profile-header-contact">
                            
                            
                            
                                
                                    
                                
                            
                        </div>
                        
                    </div>
                </div>
                <div class="profile-page-map-container" id="profile-page-map"></div>
                <p class="profile-page-map-label"></p>
            </div>
            <div class="profile-page-tabs-container">
                <div class="profile-page-tabs row">
                    <div class="column large-8 large-offset-4">
                        <span class="active-tab profile-page-tab">About</span>
                        
                        
                        
                        
                    </div>
                </div>
            </div>






<div class="profile-page-body profile-page-row" id="about-tab-container">
<div class="column large-4">

<div class="card">

<div class="card-block" id="basic-info-card">

<div class="card-item">
<span class="item-icon"><i class="fa fa-user"></i></span>
<span class="item-text">Anjac Alumni</span>

</div>







<div class="card-item">
<span class="item-icon"><i class="fa fa-map-marker"></i></span>
<span class="item-text">Lives
in <b><?php echo $this->session->place;?></b></span>
</div>



</div>

<div class="card-block">
<p class="card-title">Your Preferences</p>
<ul>

<li class="card-text block-text">Receive messages from students</li>

</ul>
</div>




</div>


<div class="card" id="contact-information">
<div class="card-block">
<p class="card-title">Contact Information</p>


  <div class="card-item">
      <span class="item-icon"><i class="fa fa-envelope"></i></span>
      <span class="item-text wrap-text">
      </span><?php echo $this->session->email;?>
          
              




<span data-tooltip="" aria-haspopup="true" class="privacy-tip has-tip" data-selector="tooltip-jqqwn2v00" aria-describedby="tooltip-jqqwn2v00" title="">
<i class="fa fa-lock privacy-lock" aria-hidden="true"></i>
</span>


          
  </span>
  </div>




  
      <div class="card-item">
          <span class="item-icon"><i class="fa fa-phone"></i></span>
          <span class="item-text">
          <?php echo $this->session->pno;?>
              
                  




<span data-tooltip="" aria-haspopup="true" class="privacy-tip has-tip" data-selector="tooltip-jqqwn2v01" aria-describedby="tooltip-jqqwn2v01" title="">
<i class="fa fa-lock privacy-lock" aria-hidden="true"></i>
</span>


              
      </span>
      </div>
  








</div>
</div>




</div>
<div class="column large-8">



<div id="profile-actions-container" class="card-block column desktop-view-block large-6" style="display: none;">

<div class="profile-action-btn-block">
<div class="action-btn color-btn">
<i class="fa fa-pencil btn-icon"></i>
<span class="btn-body">Update Profile</span>
<a href="/profile/edit/vignesh-a-2"></a>
</div>
</div>


</div>
</div>

















<div class="card accordion-card">
<p class="accordion-card-title">

Ayyanadar Janaki Ammal College

</p>
<div class="card-icon-block accordion-card-body" id="user-info-block">
<div class="picture-container">
<img src="<?php echo base_url();?>assets/images/prom.jpg" alt="profile pic">
<p class="profile-initials"></p>

</div>
<div class="card-text-container">

<span class="education-college-name">
<strong>

ANJAC
</strong>
</span>



<div class="card-item">


<p class="card-text">

<?php echo $this->session->yg;?>-<?php echo $this->session->ye;?>

</p>

<p class="card-text">

<a class="card-link" href="">
<?php echo $this->session->course;?>
</a>


<span class="card-link-separator">-</span>
<a class="card-link" href="s"><?php echo $this->session->branch;?></a>


</p>






</div>


</div>
</div>
</div>











<div class="card accordion-card" id="other-educations-card">
<p class="accordion-card-title">
Other Education
</p>
<div class="accordion-card-body">


<p class="empty-card-block">
<a href="/profile/edit/vignesh-a-2#other_education_sections"><i class="fa fa-plus"></i>
Add other
education details.</a>
</p>

</div>
</div>








<div class="card accordion-card">
<p class="accordion-card-title">

Experience

</p>
<div class="accordion-card-body">

<p class="empty-card-block">
<a href="/profile/edit/vignesh-a-2#employment_sections"><i class="fa fa-plus"></i>Add experience
details.</a>
</p>

</div>
</div>






</div>
</div>
</div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/notify.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugin/jquery.toaster.js"></script>











</body></html>