<!-- <html> -->
<?php if($data):?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/1/1.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/1/2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/1/3.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/1/4.css">

<script type="text/javascript">
    $(document).ready(function() {
            $.toaster({
                priority: 'success',
                title: 'Profile Section <br>',
                message: ' Welcome <?php echo $data->fname; ?>'
            });

        }

    );


    
</script>

<?php if(!(isset($_SESSION['user_logged'])==1)):?>
<script type="text/javascript">
    $(document).ready(function(){
       
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
    swal(
        {title:"Bye",
        text:'You Are Going to Miss Your Colleague',
        icon:"warning"
});
  }
});



});

</script>

<?php endif ?>

<?php 

//progress bar point
if(isset($data))
{
    $progress_point=0;

if($data->bio!=''){

$progress_point=10;

}
if($data->fb!='')
{
$progress_point+=5;

}
if($data->twitter!='')
{
$progress_point+=5;

}

if($data->site!='')
{
$progress_point+=5;

}

if($data->ln!='')
{
$progress_point+=5;

}

if($data->interest!='')
{
$progress_point+=10;

}

if($data->skill!='')
{
$progress_point+=10;

}

if($data->profile_pic!='')
{
$progress_point+=15;

}

if($data->title!='' && $data->domain!='' && $data->experiencefrom && $data->experienceto)
{
$progress_point+=10;

}

if($data->accomplishment_type!='' && $data->accomplishment_text) 
{
$progress_point+=10;

}
if($data->gender!='' && $data->father_name && $data->address1 && $data->current_city) 
{

$progress_point+=15;


}




}


?>


<style type="text/css">

</style>

<body>

    <div id="fullWidthContent">

        <div id="profile-view-page" class="profile-page-container">

            <div class="profile-page-header">
                <div class="profile-header-wrapper">
                    <div class="profile-header-container profile-page-row">
                        <div class="column large-6 profile-info-container">
                            <div class="profile-photo-block" title="" alt="" style="border-radius:5px;">

                                <img src="<?php echo $data->profile_pic;?>" alt="profile pic" style="height: 180px;">

                            </div>
                            <div class="profile-name-class-container">
                                <div class="profile-name-block">
                                  

                                  
                                    <span class="profile-name" style="display: inline-block;margin-right: 4px;"><?php echo ucfirst(strtolower($data->fname));?>
                                  </span>
                                  <?php if($data->user_name==$this->session->user_name && isset($_SESSION['user_logged']) == TRUE):?>
                          

                                      <div class="edit" style="display: inline-block;">
                                   <a href="<?php echo base_url();?>edit/profile/<?php echo $this->session->user_name?>">
                                    <i class="fa fa-pencil"></i></a>
                                </div>
                                <?php endif?>
                                </div>

                                  <br>
                                <span class="profile-class-block" style="display: inline-block;">
                                    Class of <?php echo $data->year_entry?>
                                   
                                </span>
                                   
                            </div>

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

             <!--        <div class="card" id="contact-information">
                        <div class="card-block">
                            <p class="card-title">Contact Information</p>

                            <div class="card-item">
                                <span class="item-icon"><i class="fa fa-envelope"></i></span>
                                <span class="item-text wrap-text">
                                    </span>
                                <?php echo$data->email;?>

                   

                                    </span>
                            </div>

                            <div class="card-item">
                                <span class="item-icon"><i class="fa fa-phone"></i></span>
                                <span class="item-text">
                         <?php echo $data->pno ?>

                                </span>
                            </div>
                               <div class="card-item">
                                <span class="item-icon"><i class="fa fa-birthday-cake"></i></span>
                                <span class="item-text">
                         <?php echo $data->dob ?>

                                </span>
                            </div>

                        </div>
                    </div>
                     -->
                    <?php if(($data->bio)):?>
                    <div class="card">

                        <div class="card-block" id="basic-info-card">

                            <div class="card-item">
                              
                                <span class="item-text">Bio</span>

                            </div>

                            <div class="card-item">
                            
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="item-text"><?php echo $data->bio;?></b></span>
                            </div>

                        </div>

                    </div>

                <?php endif?>
<!-- 
     -->
                    <div class="card">
                        
                        <div class="card-block" id="basic-info-card">
                            
                            
                                <div class="card-item">
                                    <span class="item-icon"><i class="fa fa-map-marker"></i></span>
                                    <span class="item-text">Lives
                                        in <b><?php echo $data->place?></b></span>
                                </div>
                            
                            
                            
                        </div>   
                        
                            <div class="card-block">
                                <p class="card-title">Your Preferences</p>
                                <ul>
                                    <?php if($data->receive_msg==1):?>
                                    
                                        <li class="card-text block-text">Receive messages from students</li>

                                    <?php else: ?>
                                        <li class="card-text block-text">Doesn't Receive messages from students</li>
                                    <?php endif ?>
                                    
                                </ul>
                            </div>
                        
                        
                        
                        
                            <div class="card-block show-for-large-up desktop-view-block">
                                <div class="social-card">
                                    <span data-tooltip="" aria-haspopup="true" class="social-tooltip has-tip" data-selector="tooltip-jsc31dp10" aria-describedby="tooltip-jsc31dp10" title="">
                                        <a class="fa fa-facebook social-icon " href="<?php echo $data->fb?>" target="_blank"></a>
                                      
                                    </span>
                                    <span data-tooltip="" aria-haspopup="true" class="social-tooltip has-tip" data-selector="tooltip-jsc31dp11" aria-describedby="tooltip-jsc31dp11" title="">
                                        <a class="fa fa-linkedin social-icon " href="<?php echo $data->ln?>"  target="_blank">
                                            
                                        
                                            
                                        </a>
                                    </span>
                                    <span data-tooltip="" aria-haspopup="true" class="social-tooltip has-tip" data-selector="tooltip-jsc31dp12" aria-describedby="tooltip-jsc31dp12" title="">
                                       
                                            
                                                <a class="fa fa-twitter social-icon" href="<?php echo $data->twitter?>"  target="_blank"></a>
                                            
                                   
                                    </span>
                                    <span>
                              
                                    </span>
                                    <span data-tooltip="" aria-haspopup="true" class="social-tooltip has-tip" data-selector="tooltip-jsc31dp13" aria-describedby="tooltip-jsc31dp13" title="">
                                 
                                            
                                                <a href="<?php echo $data->site?>" class="fa fa-globe social-icon" target="_blank" class="hyperlink"></a>
                                            
                                    
                                    </span>
                                </div>
                            </div>
                        
                    </div>
                          <?php if(($data->interest)):?>
                    <div class="card">

                        <div class="card-block" id="basic-info-card">

                            <div class="card-item">
                              
                              <span class="item-icon"><i class="fa fa-book"></i></span>
                                <span class="item-text">Interest</span>


                            </div>

                            <div class="card-item">
                            
                                <span class="item-text"><?php echo $data->interest;?></b></span>
                            </div>

                        </div>

                    </div>

                <?php endif?>
                          <?php if(($data->skill)):?>
                    <div class="card">

                        <div class="card-block" id="basic-info-card">

                            <div class="card-item">
                               <span class="item-icon"><i class="fa fa-flask"></i></span>
                                <span class="item-icon"></span><span class="item-text">Skills</span>

                            </div>

                            <div class="card-item">
                            
                                <span class="item-text"><?php echo $data->skill;?></b></span>
                            </div>

                        </div>

                    </div>

                <?php endif?>




                </div>
                <div class="column large-8">
                     <?php if($data->user_name==$this->session->user_name && isset($_SESSION['user_logged']) == TRUE):?>
                    <?php if($progress_point!=100):?>
              
                  
        
                                     
                    <div class="card row" id="social-sync-block">
                            
                                <div class="card-block column large-6">
                                    
                                        <p class="card-title">
                                            
                                               <strong> Nice job! You are almost there.</strong>
                                            
                                        </p>
                                      <div class="radialindicator" align="center"></div>


                                        <p class="card-text"></p>
                                    
                                </div>
                            
                            <div id="profile-actions-container" class="card-block column desktop-view-block large-6">
                                
                                <div class="profile-action-btn-block">
                                    <div class="action-btn color-btn">
                                        <i class="fa fa-pencil btn-icon"></i>
                              
                                        <span class="btn-body">Update Profile</span>
                                        <a href="<?php echo base_url();?>edit/profile/<?php echo $this->session->user_name
                                        ?>"></a>
                                    </div>
                                </div>
                            
                                
                            </div>
                        </div>

                    <?php endif?>
                    <?php endif?>
                   

         
                <div class="card accordion-card">
                    <p class="accordion-card-title">

                        Ayyanadar Janaki Ammal College

                    </p>
                    <div class="card-icon-block accordion-card-body" id="user-info-block">
                    
                        <div class="card-text-container">

                            <span class="education-college-name">
<strong>

ANJAC
</strong>
</span>

                            <div class="card-item">

                                <p class="card-text-containert">

                                    <?php echo $data->year_entry?>-
                                        <?php echo $data->year_grad?>

                                </p>

                                <p class="card-text">

                                    <a class="card-link" href="">
                                        <?php echo $data->course;?>
                                    </a>

                                    <span class="card-link-separator">-</span>
                                    <a class="card-link" href="s"><?php echo $data->branch;?></a>

                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <?php if(($data->title && $data->domain && $data->experiencefrom && $data->experienceto)):?>

                <div class="card accordion-card" id="other-educations-card">
                    <p class="accordion-card-title">
                        Experience</p>
                    <div class="accordion-card-body">
                        <div class="card-text">
                        <p class=""><?php echo $data->title;?></p>
                        <p class=""><?php echo $data->domain;?></p>
                        <p class=""><b>From:</b><?php echo $data->experiencefrom;?></p>
                        <p class=""><b>To:</b><?php echo $data->experienceto;?></p>
                    </div>
                    </div>

                </div>

        <?php endif ?>
                <?php if(($data->accomplishment_text && $data->accomplishment_type)):?>

                <div class="card accordion-card" id="other-educations-card">
                    <p class="accordion-card-title">
                    Accomplishment</p>
                    <div class="accordion-card-body">
                        <div class="card-text">
                        <p class=""><?php echo $data->accomplishment_type;?></p>
                        <p class=""><?php echo $data->accomplishment_text;?></p>
                      
                    </div>
                    </div>

                </div>

        <?php endif ?>





           <?php if($data->user_name==$this->session->user_name):?>
    <?php if($data->gender):?>

        <div class="card accordion-card profile-page-other-details">
        <p class="accordion-card-title">
            Personal Details
             <span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-jsdefqbc9" aria-describedby="tooltip-jsdefqbc9" title="">
                        <i class="fa fa-lock privacy-lock"></i>
                        </span>
        </p>


 
        <div class="accordion-card-body">
             <div class="card-block other-details-gender">
                    <p class="card-text">Gender</p>
                    <p class="card-title"><?php echo $data->gender?>
                        <span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-jsdefqbc8" aria-describedby="tooltip-jsdefqbc8" title="">
                        <i class="fa fa-lock privacy-lock"></i>
                        </span>
                    </p>
                </div>
              <div class="card-block other-details-fathers-name">
                    <p class="card-text">Father's Name</p><p>
                    </p><p class="card-title"><?php echo $data->father_name?>
                        <span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-jsdefqbc9" aria-describedby="tooltip-jsdefqbc9" title="">
                        <i class="fa fa-lock privacy-lock"></i>
                        </span>
                    </p>
                </div>  
                 <div class="card-block other-details-fathers-name">
                    <p class="card-text">Adress</p><p>
                    </p><p class="card-title"><?php echo $data->address1?>
                        <span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-jsdefqbc9" aria-describedby="tooltip-jsdefqbc9" title="">
                        <i class="fa fa-lock privacy-lock"></i>
                        </span>
                    </p>
                </div> <div class="card-block other-details-fathers-name">
                    <p class="card-text">City</p><p>
                    </p><p class="card-title"><?php echo $data->current_city?>
                        <span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-jsdefqbc9" aria-describedby="tooltip-jsdefqbc9" title="">
                        <i class="fa fa-lock privacy-lock"></i>
                        </span>
                    </p>
                </div>
              </div>
        </div>
           <?php endif?>
    <?php endif?>



</div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/notify.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugin/jquery.toaster.js"></script>

</body>

</html>


<?php  else:?>

<?php
            $this->load->view('my404/my404');
 ?>



<?php endif ?>



<script type="text/javascript">
    
$(document).ready(function()
{


$('.radialindicator').radialIndicator({
        barColor: '#87CEEB',
        barWidth: 5,
        initValue: <?php echo $progress_point?>,
        roundCorner : true,
        percentage: true

    });


}
);
</script>

