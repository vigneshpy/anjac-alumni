<?php

class needs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	
	
	}



public function index()
{

	$this->load->model('need_models','n');

	
	$row['data']=$this->n->showNeed();


	$this->load->view('templates/header',$row);

	$this->load->view('needs/needs');

	$this->load->view('templates/footer');
}


public function addNeed()
{


	if(isset($this->session->user_logged)==TRUE)
	{
$this->load->helper('date');


if($_SERVER['REQUEST_METHOD']=='POST')
{  
	$this->form_validation->set_rules('need', 'need', 'trim|xss_clean|required', array(
                'required' => 'Please Add Your Need'
            ));
	  if ($this->form_validation->run() == FALSE)
	  {

	  }

	

	$category=$this->input->post('category');
	$text=$this->input->post('need');
date_default_timezone_set("Asia/Kolkata");





	$data=array(
		'alumni_id'=>$this->session->alumni_id,
		'category'=>$category,
		'body'=>$text,
		'posted_by'=>$this->session->fname,
		'user_name'=>$this->session->user_name,
		'added_date'=>  date("F j, Y, g:i a"),
		'user_email'=>$this->session->email,
		'profile_pic'=>$this->session->profile_pic,



	);

	$this->load->model('need_models','n');
	$row=$this->n->insertneed($data);
	if($row)
	{

		redirect('needs','refresh');
	}
	else
	{
		 echo"<script>alert('something went wrong')</script>"; 
	}



}
$this->load->view('templates/header');
$this->load->view('needs/addneed');
$this->load->view('templates/footer');	
}

else
{  $this->session->set_flashdata('error', 'Please Login To Access');
	redirect('login','refresh');
}
}
public function details()
{

	if(isset($_GET['id']))
	{
	$post_id=$_GET['id'];
	// print_r($post_id);
	if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$reply=$_POST['addreply'];

			$data=array(
				'post_id'=>$post_id,
				'alumni_id'=>$this->session->alumni_id,
				'comment_text'=>$reply,
				'commented_by'=>$this->session->fname,
				'user_name'=>$this->session->user_name,
				'date'=>date("F j, Y, g:i a"),
				'profile_pic'=>$this->session->profile_pic,
				'user_email'=>$this->session->email,
			);

			$this->load->model('need_models','n');
	$row=$this->n->insertcomment($data);
	$this->load->model('need_models','n');
//loading detail view
	$row['data']=$this->n->detailNeed($post_id);
	$row['data1']=$this->n->showComments($post_id);


	//sending post notification to the owner
	if($row['data']->user_name!=$this->session->user_name)
	{	
	

		 $message=$this->load->view('email/postnotification', $row, TRUE);

		 $this->load->library('email');
         $this->email->from( 'alumnianjac@gmail.com','Anjac');
         $this->email->to($row['data']->user_email, $this->session->fname);
         $this->email->subject('Post Notification From Anjac Alumni');
         $this->email->message($message);
          if ($this->email->send()) {
              echo "send";
               } 
            else
            {
            	echo "something went  wrong";
            }
		
	}


	redirect('needs/details?id='.$post_id,'refresh');




}
//loading need_model
	$this->load->model('need_models','n');
//loading detail view
	$row['data']=$this->n->detailNeed($post_id);




	//check whether the user is the owner of the post or not

	

//loading comment section
	$comment['section']=$this->n->showComments1($post_id);




	$this->load->view('templates/header',$comment);
$this->load->view('needs/detail',$row);
$this->load->view('templates/footer');




}

else
{

	$this->load->view('templates/header');
$this->load->view('my404/my404');
$this->load->view('templates/footer');
}







}

public function deleteneed()
{
	if(isset($_GET['id']))
	{
	$post_id=$_GET['id'];
			$this->load->model('need_models','n');
			$row=$this->n->deleteneed($post_id);


			redirect('needs','refresh');

}

}

public function deletecomment()
{

	if(isset($_GET['id']))
	{
	$comment_id=$_GET['id'];
	$post_id=$_GET['pid'];

	print_r($comment_id);
			$this->load->model('need_models','n');
			$row=$this->n->deletecomment($comment_id);

			redirect('needs/details?id='.$post_id,'refresh');









}



}



















	


}