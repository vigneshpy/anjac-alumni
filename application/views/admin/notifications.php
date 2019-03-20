<!DOCTYPE html>
<html>
<head>
	<title>Push Notification</title>
</head>
<body>
<style type="text/css">
	#tit,#bod,#ur
	{
		width: 450px;
	}

</style>
<h1 align="center">Push Notification</h1>
<div class="container">
<div class="row">

<div class="col-lg-4">
</div>
<div  class="col-offset-6 centered">
<form class="form-group" method="POST" id="push_form" action="<?php echo base_url();?>/success" enctype="multipart/form-data" >

        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
         <?php }?>

<br>
<label>Message Title</label>
<br>
<input type="text" name="title" id="tit" class="form-control"  value="" required>
<label>Message</label>
<br>
<input type="text" name="body" id="bod" class="form-control" required>
<label>url</label>
<br>
<input type="url" name="url" id="ur" class="form-control" required>

<br>

<label>Image(optional)</label><br>
<input type='file' name='userimage' size='20' />
<br>

<br>
<input type="submit" name="push" value="Send Push Notification" class="btn btn-primary">

</form>
</div>

</div>

</body>
</html>
</div>
</div>



