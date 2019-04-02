
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chat extends CI_Controller {
 
 
	public function index()
	{

		// $this->load->view('templates/header');
		$this->load->view('chat/chat');

		// $this->load->view('templates/footer');

	}

	public function insert_message()
	{
		if($_SERVER['REQUEST_METHOD']=='GET')
		{
			$nic=$_GET['nick_name'];
			$msg=$_GET['msg'];
			$this->load->model('chat_model','c');

			$this->c->add_message($nic,$msg);
		}
	}
public function get_messages()
	{
		$timestamp = $this->input->get('timestamp', null);
			
		$this->load->model('chat_model','c');


		$messages = $this->c->get_messages();
		
		$msg=if(is_me){
			var $msg= <li class="right clearfix">'
				<span class="chat-img pull-right">';
					<img src="http://placehold.it/50/FA6F57/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
				</span>';
				<div class="chat-body clearfix">';
					<div class="header">';
						<small class="text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';
						<strong class="pull-right primary-font">' + data.nickname + '</strong>';
					</div>';
					<p>' + data.message + '</p>';
				</div>';
			</li>';
		}else{
		  
			var li class="left clearfix">';
				<span class="chat-img pull-left">';
					<img src="http://placehold.it/50/55C1E7/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
				</span>';
				<div class="chat-body clearfix">';
					<div class="header">';
						<strong class="primary-font">' + data.nickname + '</strong>';
						<small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';
			
					</div>';
					<p>' + data.message + '</p>';
				</div>';
			</li>';
		}"
	}
	



}


?>