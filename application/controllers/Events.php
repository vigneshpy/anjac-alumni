<?php



class events extends CI_Controller
{



	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('events/events');
		$this->load->view('templates/footer');

	}

	public function propose_event()
	{
		if((isset($_POST['register'])))
		{
		
		}

		$this->load->view('templates/header');
		$this->load->view('events/proposeEvent');
		$this->load->view('templates/footer');

	}
}