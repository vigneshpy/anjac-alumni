<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chat-Example | CodeIgniter</title>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<!-- http://bootsnipp.com/snippets/4jXW -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chat.css" /> -->
	
	
	<script type="text/javascript">	  

	</script>

</head>
<body>



<div class="container">
    <div class="row">
    	<form method="POST" class="form-group" id="chat1">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-comment"></span> Chat
			</div>
			<div class="panel-body">
				<ul class="chat" id="received">
					
				</ul>
			</div>
			<div class="panel-footer">
				<div class="clearfix">
					<div class="col-md-3">
						<div class="input-group">
							<span class="input-group-addon">
								Chat as
							</span>
							<input id="nickname" type="text"  name="" class="form-control input-sm" placeholder="Nickname..."  disabled  value="<?php echo $this->session->user_name?>" />
						</div>
					</div>
					<div class="col-md-9" id="msg_block">
						<div class="input-group">
							<input id="message" name="messages" type="text" class="form-control input-sm" placeholder="Type your message here..." />
							<span class="input-group-btn">
							<input type="submit" name="sub" value="send" class="btn btn-warning">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
    </div>
</div>



</body>
</html>


<style type="text/css">
	.chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 60px;
}

.chat li.right .chat-body
{
    margin-right: 60px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: scroll;
    height: 250px;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}
</style>

<script type="text/javascript">
$(document).ready(function()
{


  $.ajax({   
                url:"<?php echo base_url();?>Chat/get_messages",  
                method:"GET",
                success:function(data){  
                
           
                      }  
                    });



	$('#chat1').on('submit',function(e)
	{

			var nickname='<?php echo $this->session->user_name?>';
			var message=$('#message').val();

			    $.ajax({   
                url:"<?php echo base_url();?>Chat/insert_message",  
                method:"GET",  
                data:{nick_name:nickname,msg:message}, 

                success:function(data){  
                
           					
                      }  
                    });

			return false;
	});//end for form


});//end
</script>