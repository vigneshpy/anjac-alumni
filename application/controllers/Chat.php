
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
		
		}



	}

?>