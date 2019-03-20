<!DOCTYPE html>
<html>
<head>
	<title>Fcm</title>
</head>
<body>
Fcm Push Notification

<?php print_r($pay);?>




</body>
</html>

<script type="text/javascript">
var notification = new Notification('<?php echo $pay['title'];?>,<?php echo $pay['body'];?>,<?php echo $pay['image'];?>');


messaging.onMessage(function(payload) {
  console.log('Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };
  var notification = new Notification(notificationTitle,notificationOptions);

});


</script>