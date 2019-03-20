

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

</script>