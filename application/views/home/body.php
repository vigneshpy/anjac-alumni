<!DOCTYPE html>
<html>
<head>
	<title>Anjac Alumni </title>
</head>
<style type="text/css">
	body
	{
		margin:0 auto;

	}
	button
	{
		background: rgb(66, 184, 221);
	}

</style>
<body>
	<div class="container">
		<h1 align="center">Thank You For Be the Member of Anjac Alumni</h1>
		<h4>Hey There <?php echo $fname ?></h4>
		<h4>Your Email :<?php echo $email?></h4>
		<h4>Kindly Activate Your Account By click on verify email</h4>

		<a href="<?php echo base_url();?>auth/activate/<?php echo $id ;?>/<?php echo $code?>"><button>Activate Now</button></a>


	</div>

</body>
</html>