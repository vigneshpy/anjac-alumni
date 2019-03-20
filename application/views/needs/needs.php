<div class="needs-header" align="center">



<br>
<h3 align="center">Alumni Needs</h3>

<br>

<p align="center">Ask a member for help or offer help.</p>
<?php if(isset($_SESSION['user_logged'])==TRUE):?>

<form class="" method="GET"> 
<a class="btn btn-info" href="<?php echo base_url();?>addneed">Add Your Needs</a>
</form>
<?php elseif(isset($_SESSION['user_logged'])==FALSE && isset($_SESSION['admin_logged'])==1):?>
<p>Welcome Admin</p>





<?php endif?>



 


</div>
<br>






</div>
<br>
<div class="container">


<!-- check the  given value is empty or not -->
<?php if(empty($data)):?>

<br>

<h5 align="center">No Needs Yet!!</h5>

</div>

<?php else:?>




<h4>Needs By other Alumni's</h4>

<br>
<div class="row">

<?php foreach($data as $row): ?>
<div class="col-lg-4">
<div class="card text-white bg-info mb-3" style="max-width: 20rem; box-shadow: -3px 2px 5px rgba(0,0,0,0.2);">

  <div class="card-header"><?php echo $row['category'];?>

<?php if($this->session->alumni_id==$row['alumni_id']):?>
  <a class="fa fa-trash" href="<?php echo base_url();?>needs/deleteneed?id<?php echo"=".$row['need_id']?>" style="float:right;"></a>

<?php endif?>

</div>
  <div class="card-body">
    <p class="card-text"><?php echo $row['body'];?></p>
   
  </div>
  <div class="card-footer">
    <?php if(isset($_SESSION['user_logged'])==TRUE):?>
  	 <a href="<?php echo base_url();?>needs/details?id<?php echo"=".$row['need_id']?>" style="color:black" class="card-link text-muted">Add a Reply</a>
     <?php endif?>
      <a href="" style="color:black" class="card-link text-muted"></a>
    <a class="card-link" align="right" style="float:right;" href="<?php echo base_url();?>user/profile/<?php echo $row['user_name']?>"> <?php echo $row['posted_by'];?></a>


  	<p class="card-text" align="right"><?php echo $row['added_date'];?></p>
  	

  </div>
</div>
</div>

<?php endforeach?>

</div>

<?php endif ?>

</div>


</div>



<style type="text/css">

.needs-header
{
	background-color:#D0D0D0;
	height: 200px;
    margin:0 auto;
	
}	

.card
{
	background-color:#fff4b6 !important;

	color:black !important;

	height:350px !important;
    margin:0 auto;
}
body
{
  margin:0 auto;
}





</style>
<?php if(!(isset($_SESSION['user_logged'])==1)):?>
<script type="text/javascript">
    $(document).ready(function(){
       
        swal({
  title: "Hey There!",
  text: "Do You Want to Connect with Your Colleague",
  imageUrl: "http://www.theprospect.net/wp-content/uploads/2014/10/despicable-me1.gif"
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

<?php endif?>