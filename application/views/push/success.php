<div class="container">


</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
     
<script type="text/javascript">



	 var title='<?php echo $pay['title'];?>';

	const notificationOptions = {
    body:"<?php echo $pay['body'];?>",
     icon: '<?php echo $pay['icon'];?>',
     image: '<?php echo $pay['icon'];?>',
}


	var notification = new Notification(title,notificationOptions);
notification.onclick = function(){
var win = window.open('<?php echo $pay['url'];?>', '_blank');
notification.close();

};

	

</script>