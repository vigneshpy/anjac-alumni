<?php



class events extends CI_Controller
{
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
            $this->session->set_userdata('last_page', current_url());
		// $this->load->model('auth_models');
		
	
	}

            
       

	public function index()
	{
		$this->load->model('event_model','e');

		$row['data']=$this->e->get_events();
		$row['data1']=$this->e->get_proposed_events();
		// print_r($row);
		$this->load->view('templates/header');
		$this->load->view('events/events',$row);
		$this->load->view('templates/footer');

	}

	public function propose_event()
	{
		
		if((isset($_POST['register'])))
		{
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$event_name=$_POST['event_title'];
		$event_description=$_POST['des'];
		$event_date=$_POST['event_date'];
	
			$no_students=$_POST['no_students'];

			if(isset($_POST['sp']))
			{
					$select_participant=$_POST['sp'];
				
				
							$sp = implode(",",$_POST["sp"]);

												
							
		

			
		
			}

			$insert_event= array(
				'first_name' =>$fname,
				'last_name' =>$lname,
				'email' =>$email,
				'event_name' =>$event_name,
				'event_description' =>$event_description,
				'event_date' =>$event_date,
				'student_participate' =>$sp,
				'no_student' =>$no_students,
				'approved' =>0,
			


						);

				$this->load->model('event_model','e');

				$this->e->insert_prpose_event($insert_event);





		}

		$this->load->view('templates/header');
		$this->load->view('events/proposeEvent');
		$this->load->view('templates/footer');

	}


}