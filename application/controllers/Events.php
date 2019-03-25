<?php



class events extends CI_Controller
{



	public function index()
	{
		$this->load->model('event_model','e');

		$row['data']=$this->e->get_events();
		// print_r($row);
		$this->load->view('templates/header');
		$this->load->view('events/events',$row);
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