<?php 


class My404 extends CI_Controller
 {

   public function __construct()
 
   {
 
       parent::__construct();
 
   }
 	public function index()
 	{
		$this->output->set_status_header('404');
		$this->load->view('templates/header');
		$this->load->view('my404/my404');
		$this->load->view('templates/footer');
 	}
 
 	public function my429()
 	{
 		$this->load->view('templates/header');
		$this->load->view('my404/my429');
		$this->load->view('templates/footer');

 	}

 }


