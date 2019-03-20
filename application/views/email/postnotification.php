
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
		background: rgb(66, 184, 221) !important;
	}

</style>
<body>
	<div class="container">
		<h3 align="center">Hey There <?php print_r($data->posted_by);?></h3>

<h4> <?php print_r($data1->commented_by)?> Just Replied <?php print_r($data1->comment_text)?></h4><br>
		<h4>
		<a href="<?php echo base_url();?>needs/details?id=<?php print_r($data->need_id)?>">See Full Post</a>
	
		


	</div>

</body>
</html>