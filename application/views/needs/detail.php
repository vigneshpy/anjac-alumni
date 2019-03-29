<!-- 

<?php if(isset($data)): ?>
<div class="jumbotron">
<div class="container">

  <h3 align="center"><?php echo $data->category?></h3>

  <br>

<div class="media border"  style="box-shadow: -3px 0px 5px rgba(0,0,0,0.4);">

  <img src="<?php echo $data->profile_pic;?>" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
      <br>
    <h5><?php echo $data->posted_by?> <small><i style="position: relative;font-size:0.7em; "> <?php echo $data->added_date?></i></small></h5>
    <?php if($this->session->alumni_id==$data->alumni_id):?>
  <a class="fa fa-trash" href="<?php echo base_url();?>needs/deleteneed?id<?php echo"=".$data->need_id?>" style="float:right;"></a>

  <?php endif?>
    <br>

    <p><?php echo $data->body?></p>

       <hr>
       <?php foreach ($section as $comment): ?>
     <div class="media p-3">
      
         <img src="<?php echo $comment['profile_pic']?>" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
         <h5><?php echo $comment['commented_by']?> <small><i style="position: relative;float:right;font-size:0.7em; "> <?php echo $comment['date'];?></i></small></h5>
          
           <h6><?php echo $comment['comment_text'];?></h6>
           <?php if($this->session->alumni_id==$comment['alumni_id']):?>
  <a class="fa fa-trash" href="<?php echo base_url();?>needs/deletecomment?id<?php echo"=".$comment['comment_id']?>&pid<?php echo"=".$comment['post_id']?>" style="float:right;"></a>


 

<?php endif?>
             <hr>
    <br>
       
      </div>
        
      </div>
      <?php endforeach ?>
       <?php if(isset($_SESSION['user_logged'])==TRUE):?>
     	<form action="" method="POST">

     		<textarea placeholder="Add Your Reply Here" align="right" class="form-control left" name="addreply" id="rep" required></textarea>
  <br>
        
     		<input type="submit" class="btn btn-xs btn-info right" name="reply" value="Reply" style="display: inline;">
        <a class="btn btn-primary" id="need_discard_btn" href="<?php echo base_url();?>needs" style="color: white;text-decoration:none;">Back</a>
       
  </form>
<?php endif?>
    </div> 
  </div>
</div>
  	


</div>


</div>


</div>	

</div>
<?php endif?>









<style type="text/css">
.jumbotron
{
	width: 100%;
	height: 100% !important;

	
}
.media
{
		background-color:#fff4b6 !important;
}



.left {
  float: left;
  width: 425px;
height: 150px !important;
  margin: 2px 10px;
  display: inline;
}

.right {
  float: left;
  text-align: left;
  margin: 2px 10px;
  display: inline;
}

body
{
	background-color:#D0D0D0;
}

  @media only screen and (max-width: 900px) { 
.media .media-body
{

  width: 220px !important;
  margin: auto 0px;
}

textarea
{
  width: 200px !important;
  height: 100px !important;
  margin: 0px auto;
}
 
  }
</style>


<script type="text/javascript">

</script> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/needs.css">
  </head>
  <body>
    <br>
    <div class="container">
  <h2 class="text-center"> <h3 align="center"><?php echo $data->category?></h2>
  <br>
<?php if(isset($data)): ?>
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-2">
                  <img src="<?php echo $data->profile_pic;?>" class="img img-rounded img-fluid" alt="profile_pic"/>
                  <p class="text-secondary text-center"><?php echo $data->added_date?></p>
              </div>
              <div class="col-md-10">
                  <p>
                      <a class="float-left" href="<?php echo base_url();?>user/profile/<?php echo $data->user_name?>">

                      <h5><strong><?php echo $data->posted_by?></strong></h5></a>
                 </p>
                 <div class="clearfix"></div>
                  <p></p>
                   <?php if($this->session->alumni_id==$data->alumni_id):?>
                  <p>
                    <br>
                     <h4><?php echo $data->body?></h4>

                      <!-- <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a> -->

                      <a class="float-right btn text-white btn-danger" href="<?php echo base_url();?>needs/deleteneed?id<?php echo"=".$data->need_id?>"><i class="far fa-trash-alt"></i> Delete</a>
                 </p>
               <?php endif?>
                 <!--Material textarea-->
                 <br>
                 <div class="md-form amber-textarea active-amber-textarea">
                   <textarea id="form19" class="md-textarea form-control" rows="3"></textarea>
                   <label for="form19">Reply to @<?php echo $data->posted_by?></label>
                 </div>
                 <button class="btn btn-outline-primary waves-effect"><i class="fas fa-edit"></i> Add reply</button>
              </div>
          </div>
            <!-- <div class="card card-inner">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-2">
                              <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                              <p class="text-secondary text-center">15 Minutes Ago</p>
                          </div>
                          <div class="col-md-10">
                              <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                              <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              <p>
                                  <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                                  <a class="float-right btn text-white btn-danger"><i class="far fa-trash-alt"></i> Delete</a>
                             </p>
                          </div>
                      </div>
                  </div>
              </div> -->
      </div>
  </div>
<?php endif?>
</div>

<br>


  </body>
</html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css1/mdb.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js1/mdb.js">