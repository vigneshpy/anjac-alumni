<?php 
class connect extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
            $this->load->helper('url');
            $this->session->set_userdata('last_page', current_url());
       
		
	
	}
public function search()
{
	$this->load->view('templates/header');
	$this->load->view('connect/search');
	$this->load->view('templates/footer');
}
public function ajax_search()
{
	if(isset($_GET["query"]))
	{
		$search=$this->input->get("query");
			$this->load->model("search_model","s");
			$this->perPage = 4;
		$search=$this->s->get_search($search);
		 $conditions['limit'] = $this->perPage;
		if(!(empty($search)))
		{
			
				$output='
				<div class="container">
				<div class="row">';
				foreach ($search as $row) 
				{
					$output .= '
					<div class="col-md-4" style="">
					<div class="container" align="center">
					<div class="card" style="width:250px;height:350px;">
  <div class="view overlay">
    <img class="card-img-top" src="'.$row['profile_pic'].'" style="width:100%;" border="0" alt="'.$row['fname'].'">
    <a href="">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
     <a href='.base_url().'user/profile/'.$row['user_name'].'>
  <div class="card-body">
    <h4 class="card-title">'.$row['fname'].'</h4>
    <p  class="card-text">class of '.$row['year_entry'].'-'.$row['year_grad'].'</p>
    <p  class="card-text">class of '.$row['course'].'-'.$row['branch'].'</p>
    <a href='.base_url().'user/profile/'.$row['user_name'].' class="btn btn-primary">View Profile</a>
  </div>
  </a>
</div>
<br>
</div>
</div>
<br>
';
	
			}
			$output=$output."</div></div>";
		
				echo $output;
		
	
		}
		else
		{
			echo "<div class='container' align='center'>Sorry ! User Not Found</div>";
		}
}
}





public function  classroom()
{
	$course=$this->session->course;
	$branch=$this->session->branch;
	$yg=$this->session->ye;
	$ye=$this->session->yg;

	$this->load->model("search_model","s");
	$row['data']=$this->s->get_class($course,$branch,$ye,$yg);
	// print_r($row);
		if($_SESSION['user_logged']==FALSE)
		{
			$this->session->set_flashdata('error','Not Authorized Please Login to continue');
			$this->load->helper('url');
        	$this->session->set_userdata('last_page', current_url());
			redirect('auth/login');
		}
		else{
	$this->load->view('templates/header');
	$this->load->view('classroom/classroom',$row);
	$this->load->view('templates/footer');

}
}

}