<?php

class Home extends CI_Controller
{
	
	public function index()
	{
	

	$this->load->model('event_model','e');

	$row['data']=$this->e->get_events_home();


	
		

		$this->load->view('templates/header');
		$this->load->view('home/home',$row);
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

	public function job()
	{

		if((isset($_POST['register'])))
		{
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$job_name=$_POST['job_title'];
		$job_description=$_POST['job_summary'];
		$salary=$_POST['salary'];
		$location=$_POST['loc'];
		$experience=$_POST['experience'];
		$url=$_POST['site_link'];
		
	
		

			
			$insert_job= array(
				'first_name' =>$fname,
				'last_name' =>$lname,
				'email' =>$email,
				'job_name' =>$job_name,
				'job_summary' =>$job_description,
				'salary' =>$salary,
				'location' =>$location,
				'experience' =>$experience,
				'url' =>$url,
			


						);

				$this->load->model('job_model','e');

				$d=$this->e->insert_job($insert_job);
				if($d)
				{
               $this->session->set_flashdata('job_app', 'Your Job offer Needs an Approval!!');

               redirect('home','refresh');
           }




		}

		$this->load->view('templates/header');
		$this->load->view('events/job');
		$this->load->view('templates/footer');

	}



}