<!DOCTYPE html>
<html>
<head>
	<title>Anjac Alumni </title>
</head>
<style type="text/css">
	button
	{
		background: rgb(66, 184, 221);
	}
	a
	{
		background: rgb(223, 117, 20)
	}

</style>
<body>
	<div class="container">
		<h1 align="center">Hey There !</h1>
		<h4>We Got an Request to Reset Your Anjac Alumni Password</h4>
		<h4>If You Ignore this Message Your Password Wont Be Changed</h4>
		<h4>If You Didnt Request to Change  the Password Just Ignore this Message!</h4>

		<a href="<?php echo site_url();?>auth/change/<?php echo $id?>/<?php echo $code?>">Reset Password</a>
		<small>Thanks From Anjac</small>

	</div>

</body>
</html>