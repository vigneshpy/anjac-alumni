<?php

class faq extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('events/faq');
		$this->load->view('templates/footer');
	}

	public function faq_details()
	{
		$this->load->view('templates/header');
		$this->load->view('events/faq_details');
		$this->load->view('templates/footer');
	}
}