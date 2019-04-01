<?php

class Home extends CI_Controller
{
	
	public function index()
	{
	
	
		

		$this->load->view('templates/header');
		$this->load->view('home/home');
		$this->load->view('templates/footer');

	}


	public function is_birthday()
	{	
		$this->load->database();
		$sql="SELECT *  FROM register WHERE (DAY(dob),MONTH(dob)) IN (SELECT DAY(CURRENT_DATE) , MONTH(CURRENT_DATE))";
		$query=$this->db->query($sql);
		$row['data12']=$query->result_array();

		print_r($row);







			$this->load->view('templates/header');
			$this->load->view('home/home');
			$this->load->view('templates/footer');

	
	}


	public function gallery()
	{
		$this->load->view('templates/header');
			$this->load->view('events/gallery');
			$this->load->view('templates/footer');
	}



}