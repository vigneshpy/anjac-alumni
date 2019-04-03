<?php


class admin extends CI_Controller
{

public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('admin_model','a');

		$event_request['nor']=$this->a->retrive_num_request();
		$event_request['nor1']=$this->a->retrive_num_need();

		$this->load->view('templates/admin-foot',$event_request);
	
	}



	public function index()
	{		



		if(isset($_SERVER['REQUEST_METHOD'])=='POST')
			{
			$this->form_validation->set_rules('adminname', 'Email', 'trim|xss_clean|required', array(
                'required' => 'Fill Out This Field'
            ));
            $this->form_validation->set_rules('adminpass', 'Password', 'trim|required|xss_clean');
            
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'user_name' => $this->input->post('adminname'),
                    'password' => $this->input->post('adminpass'),
                    
                );
                
                
                
            $this->load->model('admin_model','a');

	$row=$this->a->getadmin($data); 





if($row){

	if($row->user_name == $this->input->post('adminname') && $row->password==$this->input->post('adminpass'))
	{
		$_SESSION['admin_logged']=1;

		redirect('admin/dashboard','refresh');
	}           
	else
	{
		$this->session->set_flashdata('error', 'User name or password Incorrect');
                    
       redirect('admin', 'refresh');  
	}
                
  }

}


	
}

		$this->load->view('templates/header');
		$this->load->view('auth/admin');
		$this->load->view('templates/footer');
	}


	//count the number of user


	//dashboard
		public function dashboard()
	{
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			$num['data']=$this->a->numberofuser();
			$num['data1']=$this->a->get_user_last_month();
			$num['data2']=$this->a->get_user_given_month(2);
			$num['data3']=$this->a->get_user_all_month();



	

		$this->load->view('templates/admin-head');
		$this->load->view('admin/dashboard',$num);
		$this->load->view('templates/admin-foot');
	}
	//display the total number of  users
	public function userprofile()
	{
		if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			

			$this->load->model('admin_model','p');

			$row['data']=$this->p->getActiveUsers();
			$row['data1']=$this->p->getInActiveUsers();

		$this->load->view('templates/admin-head');
		$this->load->view('admin/dispuser',$row);
		$this->load->view('templates/admin-foot');
	}

	//display the alumni needs

	public function userneeds()
	{
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			
		$this->load->model('admin_model','p');

		$row['data']=$this->p->getneeds();
		$row['data1']=$this->p->getcomments();
		$this->load->view('templates/admin-head');
		$this->load->view('admin/userneed',$row);
		$this->load->view('templates/admin-foot');
	}


	//logout function for alumni	
	public function admin_logout()
	{

		unset($_SESSION);
        session_destroy();
        // 
        redirect('admin', 'refresh');
	}

	//delete the user

	public function admin_delete()
	{
		
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			
		$user_name=$_POST['delete_id'];
		$this->load->model('admin_model','p');

		$this->p->user_delete($user_name);

		
	}	
//delete the user need

	public function need_delete()
	{
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			
		$user_name=$_POST['delete_id'];

		$this->load->model('admin_model','p');

		$this->p->need_delete($user_name);

		
	}	



//delete th comment
	public function comment_delete()
	{
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
		if(isset($_GET['delete_id']))
			{
		$id=$_GET['delete_id'];
		$this->load->model('admin_model','p');

		$this->p->comment_delete($id);
	}
		
	}

	public function add_event()
	{
			if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}

		if(isset($_POST['esubmit']))
		{

	
			 $this->form_validation->set_rules('ename', 'Event Name', 'trim|required|xss_clean');
			 $this->form_validation->set_rules('edescription', 'Event description', 'trim|required|xss_clean');
			 $this->form_validation->set_rules('edate', 'Event date', 'trim|required|xss_clean');
			 $this->form_validation->set_rules('etime', 'Event Time', 'trim|required|xss_clean');
		
	  if ($this->form_validation->run() == TRUE)
	   {
	   
	   	$ename=$this->input->post('ename');
         $edes=$this->input->post('edescription');
         $edate=$this->input->post('edate');
         $etime=$this->input->post('etime');

      	$this->load->helper('date');
         $event=array(
         	'event_name'=>$ename,
         	'event_description'=>$edes,
         	'event_date'=>$edate,
         	'event_time'=>$etime


         );	


         $this->load->model('admin_model','a');
 
         $this->a->insert_event($event);
echo"<script type='text/javascript' src='<?php echo base_url();?>assets/js/sweetalert.min.js'></script>";


         echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("WOW!","Events Added Successfully","success");';
  echo '}, 1000);</script>';

      
  	redirect('admin/view-event','refr');
     }	

         
    	}       
			
		$this->load->view('templates/admin-head');
		$this->load->view('events/addEvents');
		$this->load->view('templates/admin-foot');
	}

	public function view_event()
	{if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}
			
		$this->load->model('admin_model','a');

		$row['data']=$this->a->get_events();


		$this->load->view('templates/admin-head',$row);
		$this->load->view('events/viewEvents');
		$this->load->view('templates/admin-foot');

		
	}


	public function event_delete()
	{
	if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
		
			redirect('admin');
		}
			
		$id=$_GET['delete_id'];
		$this->load->model('admin_model','p');

		$this->p->event_delete($id);


	}
public function update_event()
	{
	if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
		
			redirect('admin','refresh');
		}
			
		$id=$_GET['event_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->update_event($id);



		return json_encode($row); 	 

	}


public function update_event1()
	{
	if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
		
			redirect('admin','refresh');
		}
			
		
		$ename=$_GET['ename'];
		$ed=$_GET['edecription'];
		$edate=$_GET['edate'];
		$etime=$_GET['etime'];
	$id=$_GET['eid'];
	print_r($id);



		$data=array(

	
			'event_name'=>$ename,
			'event_description'=>$ed,
			'event_description'=>$ed,
			'event_date'=>$edate,
			'event_time'=>$etime,


		);


		$this->load->model('admin_model','p');

		$row=$this->p->update_event1($id,$data);
		
	

	}

	public function event_request()
	{
		if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
		}


		$this->load->model('admin_model','a');

		$row['data']=$this->a->get_proposed_event_pending();
		$row['data1']=$this->a->get_proposed_event_allowed();
		$row['data2']=$this->a->get_proposed_event_denied();
		$this->load->view('templates/admin-head');
		$this->load->view('events/event-request.php',$row);
		$this->load->view('templates/admin-foot');
	}


	public function event_allow()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['event_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->allow_event($id);


	
	}

	public function event_deny()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['event_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->deny_event($id);


	
	}

	public function event_deny_delete()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['event_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->deny_event_delete($id);


	
	}




public function needs_request()
{

	if($_SESSION['admin_logged']!=1)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
		
			redirect('admin','refresh');
		}
			$row['data']=$this->a->get_proposed_need_pending();
		$row['data1']=$this->a->get_proposed_need_allowed();
		$row['data2']=$this->a->get_proposed_need_denied();
		$row['data3']=$this->a->getcomments();


				$this->load->view('templates/admin-head');
		$this->load->view('admin/needs-request.php',$row);
		$this->load->view('templates/admin-foot');
			
}

public function need_allow()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['need_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->allow_need($id);


	
	}

	public function need_deny()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['need_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->deny_need($id);


	
	}

	public function need_deny_delete()
	{
		if($_SESSION['admin_logged']!=1)
{
	$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			redirect('admin');
}

				$id=$_GET['need_id'];
		$this->load->model('admin_model','p');

		$row=$this->p->deny_need_delete($id);


	
	}

public function job()
{
	$this->load->view('templates/admin-head');
	$this->load->view('admin/job');
	$this->load->view('templates/admin-foot');
}









}
