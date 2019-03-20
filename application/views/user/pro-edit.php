<?php if($data):?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<style type="text/css">
  .navbar-brand
  {
    font-size:18px;
  }
  .nav-link
  {
    font-size: 16px;
  }
  .dropdown-item
  {
    font-size: 16px;

  }
span
{
  font-size: 12px;
}

label
{
  font-size: 16px !important;
}

</style>
  
    <meta name="viewport" content="width=device-width,initial-scale=1">



  <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/foundation.dd0d1bc488db.css"/>
    <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/normalize.7caceed67722.css"/>
    <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/index.fe0daf20816f.css"/>
  

  
    <link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/profile-page.ae5eada96049.css">
<link rel="stylesheet" type="text/css" href="https://static.almabaseapp.com/css/common.01f1a0347f04.css">
<!-- 
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pro/1.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pro/2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pro/3.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pro/4.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pro/5.css"/>
 -->
   

    <style>
        .select2-results__option {
            display: list-item;
        }
        .select2-container {
            width: 100% !important;
        }

html,
body {
  font-size: 70%; }

body {
  background: #fff;
 }

a:hover {
  cursor: pointer; }

img {
  max-width: 100%;
  height: auto; }

img {
  -ms-interpolation-mode: bicubic; }


img {
  display: inline-block;
  vertical-align: middle; }

textarea {
  height: auto;
  min-height: 50px; }

select {
  width: 100%; }

    </style>

  

  
  
    
  

  


  
    
      <style type="text/css">
        #event_discussion {
	display: none;
}
#home_tech_expo img {
  width: 20rem;
}
#home_tech_expo #home_tech_expo_title {
  font-size: 1.4rem;
  font-weight: bold;
  margin: 1.4rem 0 2.1rem;
}
#menu .top-bar #menu_college_name a {
 font-size: 1rem;
}
@media only screen and (min-width: 64.1em){
#menu .top-bar .name {
width: 7.8rem;
}

.profile-pic
{

  height: 100px !important;
}

}
/** Event home button css ***/
#event-detail-page[data-event-id="7308"] #event-detail-container .event-header-btn #event-status-2 .btn-body 
{display: none;}
#event-detail-page[data-event-id="7308"] #event-detail-container .event-header-btn #event-status-2:after 
{content: 'Registration';padding: 0;text-transform: uppercase;font-weight: 500; font-size: 1.2rem;}
      </style>
    
  

  

  
    
       
<style type="text/css">

.profile-pic
{

  height:100% !important;
}

</style>        
    


    




    
  

  
    
  



</head>


<body>




  






<div id="fullWidthContent">
       <div id="profile-edit-page" class="profile-page-container">
        
            <form enctype="multipart/form-data" method="post" action="" name="update" id="pro-edit">

                <div class="profile-page-header">
                    <div class="profile-header-wrapper">
                        <div class="profile-header-container profile-page-row">
                            <div class="column large-3 profile-info-container">
                          <div class="profile-photo-block" alt="profile pics">
                                  

                                    <img src="<?php echo $data->profile_pic?>"alt="profile" class="profile-pic" style="">

                                       
                                    
                                    <input type="file" name="pro_pic"
                                           class="picture_input profile-picture-input file-upload" autocomplete="off" id="file_upload">
                              
                                    <div class="change_picture profile-pic-handler">
                                        <span><i class="fa fa-camera upload-button"></i>Change Profile Picture</span>
                                    </div>






</div>
                            </div>
                            <div class="column large-9" id="profile-header-inputs">
                                <div class="row">
                                  
                                      <div class="column large-4 suffix-block">
                                        <div class="input-block header-custom">
                                            <label class="input-element">
                                                <span class="input-label">First Name</span>
                                                <input name="fname" class="input-text-field input-field"
                                                       value="<?php echo $data->fname?>"
                                                       type="text" title="First Name">
                                            </label>
                                         
                                        </div>
                                    </div>
                                      <div class="column large-4 suffix-block">
                                        <div class="input-block header-custom">
                                            <label class="input-element">
                                                <span class="input-label">Last Name</span>
                                                <input name="last_name" class="input-text-field input-field"
                                                       value="<?php echo $data->lname?>"
                                                       type="text" title="Last Name cant be change">
                                            </label>
                                         
                                        </div>
                                    </div>
                                    <div class="column large-4">
                                        <div class="input-block">
                                            <label class="input-element">
                                                <span class="input-label">Current Location</span>
                                                <input class="input-text-field input-field" name="place"
                                               
                                                       id="searchTextField"
                                                       value="<?php echo $data->place?>"
                                                       type="text" title="Change Your Location">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-page-map-container" id="profile-page-map">
                    </div>
                    <p class="profile-page-map-label"></p>
                </div>
                <div class="profile-page-body profile-page-row">
                    <div class="column large-4">
                        <div class="card">
                            <div class="card-block" data-role="presentation">
                                <p class="card-title">Short bio</p>
                                <div class="input-block large">
                                    <label class="input-element">
                                        <textarea name="bio"
                                                  class="input-textarea"><?php echo $data->bio?></textarea>
                                        <span class="input-counter">140 Characters left</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block" data-role="presentation">
                                <div class="input-block large">
                                    <label class="input-element">
                                        <input name="email" class="input-text-field required-field input-field"
                                               value="<?php echo $data->email?>"
                                               type="email">
                                        <span class="input-label">Email ID</span>
                                        
                                    </label>
                                </div>
                                
                                    <div class="input-block largephone-numbers" id="mobile-phone-number"
                                         data-id="" data-url="">
                                        <label class="input-element">
                                           
                                            <input class="input-text-field input-field required-field"
                                                   name="pno"
                                                   value="<?php echo $data->pno?>" type="tel">
                                            <span class="input-label">Phone Number</span>
                                            
                                        </label>
                                    </div>
                                
                               
                             
                                <div class="input-block large">
                                    <label class="input-element">
                                        <input class="input-text-field input-field" name="nickname" type="text"
                                               value="">
                                        <span class="input-label">Nickname</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <p class="card-title">Preferences</p>
                                <div class="input-block large">
                                    
                                        <label class="input-element input-list-element">

                                          <?php if($data->receive_msg==1):?>
                                               <input class="input-checkbox-field" title="It helps to connect with the people" 
                                                   type="checkbox" name="receive" value="1" name="receive" checked>
                                         
                                            <?php else:?>
                                                 <input class="input-checkbox-field" title="It helps to connect with the people" 
                                                   type="checkbox" name="receive" value="1" name="receive">


                                                <?php endif ?>


                                            <span class="list-element-label" data-id="388">Receive messages from students
                                                
										    </span>
                                        
                                    
                          </label>          
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="card-title">Communication Preferences</p>
                                <div class="input-block large">

                                    <label class="input-element input-list-element">
                                        <input class="input-checkbox-field" checked
                                               type="checkbox" name="communication" value="1">
                                        <span class="list-element-label">
                                            I would like to receive communication by Email
                                        </span>
                                 
                                    </label>
                                </div>
                            </div>
                            <div class="card-block" data-role="presentation">
                                <p class="card-title">Social Media</p>
                                <div class="input-block large">
                                    
                                        <label class="input-element" data-id=""
                                               data-url="">
                                            <span class="input-icon"><i class="fa fa-facebook-official"></i></span>
                                            <input class="url-field input-text-field input-field" type="text"
                                                   value="<?php echo $data->fb?>"
                                                   name="facebook_url"
                                                   data-url="url"
                                            />
                                        </label>
                                    
                                    
                                        <label class="input-element" data-id=""
                                               data-url="">
                                            <span class="input-icon"><i class="fa fa-linkedin-square"></i></span>
                                            <input class="input-text-field input-field" type="text"
                                                   value="<?php echo $data->ln?>"
                                                   name="linkedin_url"
                                                   data-url="url"
                                            />
                                        </label>
                                    
                                    
                                        <label class="input-element" data-id=""
                                               data-url="">
                                            <span class="input-icon"><i class="fa fa-twitter-square"></i></span>
                                            <input class="input-text-field input-field" type="text"
                                                   value="<?php echo $data->twitter?>"
                                                   name="twitter_url"
                                                   data-url="url"
                                            />
                                        </label>
                                    
                                                              
                                    
                                        <label class="input-element" data-id=""
                                               data-url="">
                                            <span class="input-icon"><i class="fa fa-globe"></i></span>
                                            <input class="input-text-field input-field" type="text"
                                                   value="<?php echo $data->site?>"
                                                   name="website_url"
                                                   data-url="url"
                                            />
                                        </label>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <p class="card-title">Interests</p>
                                <div class="input-block large" id="interests_container">
                                    
                                    
                                    
                                </div>
                                <div class="input-block large">
                                    <label class="input-element inline-input-edit-element">
                                        <input class="input-text-field input-field autofillme" type="text" name="interest"
                                          value="<? echo $data->interest?>">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <p class="card-title">Skills</p>
                             
                                <div class="input-block large">
                                    <label class="input-element inline-input-edit-element">
                                        <input class="input-text-field input-field autofillme" type="text"
                                              name="skill"
                                               value="<?php echo $data->skill?>" >
                                 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column large-8">
                        
                            
                                




                            
                        
                            
                                




<div class="card accordion-card profile-section" id="all_education_sections" data-key="educations">
    <p class="accordion-card-title">
        
            Ayyanadar Janaki Ammal College
        
    </p>
    <div class="accordion-card-body" id="education_sections">
        <div class="card-block" data-role="presentation">
            
                <div class="row education_section profile-section-item" data-id="3016435">
                  
                    <div class="column large-10">
                        





<div class="column large-12">
    <div class="input-block medium">
        <label class="input-element edit_element edit_college">
            
                <span class="input-label">College</span>
                <p class="input-fixed-element">Anjac</p>
     
            
        </label>
        
            <label class="input-element edit_element edit_rollnum">
                <input type="text" class="input-text-field input-field" name="rno"
                       value="<?php echo $data->rollno?>"/>
                <span class="input-label">Roll No</span>
            </label>
        
    </div>
    <div class="input-block small">
        <label class="input-element edit_element edit_course">
            <span class="input-label">Course</span>
            <select name="course1" placeholder="course" id="course">
                       <option value="<?php echo $data->course?>" ><?php echo $data->course?></option>
                     <?php
                  foreach($course as $row)
                  {
                echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                }
              ?>
                  </select>


        </label>
        <label class="edit_element edit_branch input-element">
            <span class="input-label">Branch</span>
            <select class="input-dropdown-field input-field branchselect"  name="branch1">
 
            <option value="<?php echo $data->branch?>" ><?php echo $data->branch?></option>

              <option label=" "></option>
                     <?php
                  foreach($branch as $row)
                  {
                echo '<option value="'.$row->name.'" name="branch">'.$row->name.'</option>';
                    }
              ?>
                  </select>

        </label>

    </div>
    <div class="input-block medium custom-input-block date-range-block">
        
            <label class="input-element">
                <span class="input-label">Year of Entry</span>
                <select name="ye" class="input-dropdown-field input-field max-range-field yearselect"> 
                  <option value="<?php echo $data->year_entry?>"><?php echo $data->year_entry?></option>
                </select>
            </label>
        
        
        <label class="input-element year_of_graduation_element
                ">
            <span
                class="input-label">
                
                
                    Year of Graduation
                
                
            </span>
            <select name="yg"
                    class="input-dropdown-field input-field max-range-field yearselect"
                    data-value=""
                    data-range="1940-2023 ">
                      
                  <option value="<?php echo $data->year_grad?>"><?php echo $data->year_grad?></option>

                    </select>
        </label>


    </div>
    
        


    
</div>

                    </div>
                </div>

            
        </div>


        <div class="row" id="education-sections-container">
            <div class="education_section card-block card-clone-item" data-role="presentation">
                <div class="column large-11">
                    





<div class="column large-12">
    <div class="input-block medium input-element ">
        <label class="input-element edit_element edit_college">
            
                <span class="input-label">College</span>
                <p class="input-fixed-element">Anjac</p>
           
            
        </label>
        
            <label class="input-element edit_element edit_rollnum">
                <input type="text" class="input-text-field input-field" name="roll_number"
                       value="  <?php echo $data->rollno?>"/>
                <span class="input-label">Roll No</span>
            </label>
        
    </div>
    <div class="input-block small">
        <label class="input-element edit_element edit_course">
            <span class="input-label">Course</span>
               <select name="course" placeholder="course" id="course"class="custom-select">
                    <option label=" "></option>                                                                                                                                  
                     <?php
                  foreach($course as $row)
                  {
                echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                }
              ?>
                  </select>


           
        </label>
        <label class="edit_element edit_branch input-element">
            <span class="input-label">Branch</span>
                  <select name="branch"  id="branch" class="custom-select">
                    <option label=" "></option>
                     <?php
                  foreach($branch as $row)
                  {
                echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                }
              ?>
                  </select>
                  

           </label>
      
    </div>


    <div class="input-block medium custom-input-block date-range-block">
        
            <label class="input-element">
                <span class="input-label">Year of Entry</span>
                <select name="education.year_of_joining"
                        data-value=""
                        data-range="1935- 2019"
                        class="input-dropdown-field input-field yearselect min-range-field" id="yentry">
                </select>
            </label>
        
        
        <label class="input-element year_of_graduation_element
                ">
            <span
                class="input-label">
                
                
                    Year of Graduation
                
                
            </span>
            <select name="education.year_of_graduation"
                    class="input-dropdown-field input-field max-range-field yearselect"
                    data-value=""
                    data-range="1940-2023 " id="ygrad"></select>
        </label>
    </div>
    
        


    
</div>

                </div>
             
            </div>
            
        </div>
    </div>
</div>

                            
                        
                            
                                


                    
                            
                                


<div class="card accordion-card profile-section" id="employment_sections" data-key="employments">
    <p class="accordion-card-title">
        
            Experience
    </p>
    <div class="accordion-card-body">
        
            <div class="card-block employment_section profile-section-item row" data-role="presentation">
                <div class="column large-11">
                    <div class="input-block large">
                     
                    </div>
                    <div class="input-block medium">
                        <label class="input-element edit_element edit_designation">
                            <input type="text" name="experiencetitle"
                                   class="autofillme designation input-text-field input-field"
                                   data-type="designations" autocomplete="off"
                                   value="<?php echo $data->title?>">
                            <span class="input-label">Title</span>`
                        </label>
                        <label class="input-element edit_element edit_domain">
                            <input type="text" name="experiencedomain"
                                   class="autofillme domain input-text-field input-field" 
                                   autocomplete="off" value="<?php echo $data->domain?>">
                            <span class="input-label">Job Domain</span>
                        </label>
                    </div>
                  </div>
                    <div class="input-block date-range-block custom-input-block medium">
                        <div class="input-element">
                            <span class="input-label">From</span>
                            <label class="input-element edit_element">
                                                           </label>

                             <input type="date" name="experiencefrom"
                                   class="autofillme domain input-text-field input-field" 
                                   autocomplete="off" value="<?php echo $data->experiencefrom?>">
                         
                        </div>
                          <div class="input-block date-range-block custom-input-block medium">
                        <div class="input-element">
                            <span class="input-label">To</span>
                            <label class="input-element edit_element">
                                                           </label>

                             <input type="date" name="experienceto"
                                   class="autofillme domain input-text-field input-field" 
                                   autocomplete="off" value="<?php echo $data->experienceto?>">
                         
                        </div>
                    </div>
                    
                        


                    
                </div>
              
            </div>
        
    </div>
 
</div>

                            
                        
                            
                                



<div class="card accordion-card profile-section" id="accomplishment_sections" data-key="accomplishments">
    <p class="accordion-card-title">
        Accomplishments
    </p>
    <div class="accordion-card-body">
        
          <div class="card-block accomplishment_section profile-section-item row" data-role="presentation">
                <div class="column large-11">
                    <div class="input-block large">
                        <label class="input-element edit_element edit_type">
                            <span class="input-label">Type</span>
                            <select name="accomplishmenttype" class="input-dropdown-field input-field">
                           


                                    <option value="<?php echo $data->accomplishment_type?>"><?php echo $data->accomplishment_type?></option>
                                    <option value="Achievement">Achievement</option>
                           
                                
                                    <option value="Social Contribution">Social Contribution</option>
                                
                                    <option value="Social Contribution">Recognition</option>
                                
                            </select>
                        </label>
                    </div>
                    <div class="input-block large">
                        <label class="input-element edit_element edit_text">
                            <span class="input-label">Description</span>
                            <textarea name="accomplishmenttext" maxlength="120" class="input-textarea"
                                      placeholder="Describe your accomplishment briefly"><?php echo $data->accomplishment_text ?> </textarea>
                        </label>
                    </div>
                    
                        


                    
                </div>
               
            </div>
        
    </div>
   
</div>

                            
                        
                            
                                




<div class="card accordion-card other-details">
    <p class="accordion-card-title">
        Other Details
    </p>
    <div class="accordion-card-body">
        <div class="card-block row" data-role="presentation">
            <div class="column large-12">
                <div class="card-block-item">
                    <div class="input-block medium">
                        <label class="input-element edit_element edit_gender">
                            <span class="input-label">Gender
                                
                            </span>

                                <select name="gender" class="third input-dropdown-field input-field">
                                    <option value="<?php echo $data->gender ?>"><?php echo $data->gender ?></option>
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                    <option value="Other" >Other</option>
                                </select>
                        </label>
                        
                            <label class="input-element edit_element edit_fathers_name">
                                <input type="text" class="input-text-field input-field" name="fathers_name"
                                       value="<?php echo $data->father_name?>">
                                <span
                                    class="input-label">Father's Name</span>
                            </label>
                        
                    </div>
                    <div class="input-block date-range-block date-block custom-input-block medium">
                   
                       <label class="input-element edit_element edit_fathers_name">
                                <input type="text" class="input-text-field input-field" name="a1"
                                       value="<?php echo $data->address1?>">
                                <span
                                    class="input-label">Addrees Line 1</span>
                            </label>
                              <label class="input-element edit_element edit_fathers_name">
                                <input type="text" class="input-text-field input-field" name="a2"
                                       value="<?php echo $data->address2 ?>">
                                <span
                                    class="input-label">Address Line 2</span>
                            </label>
                              <label class="input-element edit_element edit_fathers_name">
                                <input type="text" class="input-text-field input-field" name="current_city"
                                       value="<?php echo $data->current_city ?>">
                                <span
                                    class="input-label">Current City</span>
                            </label>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="card-block row">
            <div class="column large-12">
                
                
                    
          
                
            </div>
        </div>
        
        
    </div>
</div>

                            
                        
                        




                    </div>
                </div>
                <div class="profile-page-footer sticky-footer">
                  
 <button class="btn btn-warning btn-lg" type="button" style="" >
  <a style="color:white;"href="<?php echo base_url();?>user/profile/<?php echo $this->session->user_name?>">Discard</a></button>
         
                      <button class="btn btn-success" id="" type="submit" name="update_profile"  style="color:white;font-size:13px;">Save Changes</button>



                </div>
                <div class="presentation"></div>
            </form>
        
    </div>



</div>



<!--  -->

</body>


</html>









<script type="text/javascript">

$(document).ready(function() {
// var file = $('input[type="file"]').val('<?php echo base_url();?>');


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                     var file = $('input[type="file"]').val();
                var exts = ['jpg','jpeg','png'];
                if ( file ) {
// split file name at dot
var get_ext = file.split('.');
// reverse name to check extension
get_ext = get_ext.reverse();
// check file type is valid as given in 'exts' array
if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
   $('.profile-pic').attr('src', e.target.result);
     // $.ajax({  
     //                 url:"<?php echo base_url(); ?>user/ajax_upload",   
     //                 //base_url() = http://localhost/tutorial/codeigniter  
     //                 method:"POST",  
     //                 data:new FormData($('#pro-edit')[0]),  
     //                 contentType: false,  
     //                 cache: false,  
     //                 processData:false,  
     //                 success:function(data)  
     //                 {  
     //                    alert('success');
     //                     alert(data);
     //                 }  
     //            }); 
  
} else {

   $.toaster({
                priority: 'danger',
                title: 'Error',
                message: 'Invalid Format'
            });



}
}
               

            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>



<script type="text/javascript">
  var unsaved = false;

$(":input").change(function(){ //triggers change in all input fields including text type
    unsaved = true;
});

$('#update_btn').click(function() {
    unsaved = false;
});

function unloadPage(){ 
    if(unsaved){
        return "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
    }
}

window.onbeforeunload = unloadPage;
</script>
   
   <script type="text/javascript">

        
    function search2()
    {
    var input = document.getElementById('searchTextField');

    autocomplete = new google.maps.places.Autocomplete(input);
    }
    </script> 
 

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugin/jquery.toaster.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6A-04NLlDN0ImEPTkgCFoVh2SOqdR-70&libraries=places&callback=search2"></script>


<?php else: ?>

  <?php $this->load->view('my404/my404');?>








<?endif?>
