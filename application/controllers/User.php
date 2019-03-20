<?php

class user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('auth_models');
		
	}

	public function profile()
	{

	

	 	$this->load->model('profile_models','p');

		$username=$this->uri->segment(3);


	 	$row['data']=$this->p->showProfile($username);

	 	if(empty($row))
	 	{
	 		
	 	
	 	}
	 	else
	 	{

	 	 $this->load->view('templates/header',$row);
		$this->load->view('user/profile1');
		$this->load->view('templates/footer');	
}
		}
	


	public function profile_edit()
	{
		if($_SESSION['user_logged']==FALSE)
		{	

			$this->session->set_flashdata('error','Please Login to Access');
			redirect('auth/login');
	 }
	 else
	 {

	 	$username=$this->session->user_name;
	 	$this->load->model('profile_models','p');
	 	$pro['data']=$this->p->showProfile($username);
	 	 $datum['course']=$this->p->fetch_course();
          $datum['branch']=$this->p->fetch_branch();

            $config['upload_path'] = './upload/';  
             $config['allowed_types'] = 'jpg|jpeg|png';  

                $this->load->library('upload', $config);  


            
          

	 	if(isset($_POST['update_profile']))
	 	{
	 		//for updating profile
	 		$fname=$_POST['fname'];
	 		$lname=$_POST['last_name'];
	 		$place=$_POST['place'];
	 		$bio=$_POST['bio'];
	 		$email=$_POST['email'];
	 		$pno=$_POST['pno'];
	 		$fb=$_POST['facebook_url'];
	 		$ln=$_POST['linkedin_url'];
	 		$twitter=$_POST['twitter_url'];
	 		$site=$_POST['website_url'];
	 		$interest=$_POST['interest'];
	 		$skills=$_POST['skill'];
	 		$rno=$_POST['rno'];
	 		$ye=$_POST['ye'];
	 		$yg=$_POST['yg'];
	 		$course=$_POST['course1'];
	 		$branch=$_POST['branch1'];
	 		$receive=$_POST['receive'];
	 		$communication=$_POST['communication'];

	 		$title=$_POST['experiencetitle'];
	 		$domain=$_POST['experiencedomain'];
	 		$from=$_POST['experiencefrom'];
	 		$to=$_POST['experienceto'];

	 		$user_ip=$_SERVER['REMOTE_ADDR'];

	 		//other details




	 		
	 			
	 			//fetching other details
	 	





	 		    if(!$this->upload->do_upload('pro_pic'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                    $img=base_url().'upload/'.$data["file_name"];

                




                }  


	 	$data=array(
	 		'fname'=>$fname,
	 		'lname'=>$lname,
	 		'email'=>$email,
	 		'profile_pic'=>$img,
	 		'pno'=>$pno,
	 		'bio'=>$bio,
	 		'place'=>$place,
	 		'year_entry'=>$ye,
	 		'year_grad'=>$yg,
	 		'fb'=>$fb,
	 		'twitter'=>$twitter,
	 		'ln'=>$ln,
	 		'site'=>$site,
	 		'rollno'=>$rno,
	 		'course'=>$course,
	 		'branch'=>$branch,
	 		'interest'=>$interest,
	 		'skill'=>$skills,
	 		'receive_msg'=>$receive,
	 		'communication'=>$communication,
	 		'gender'=>$_POST['gender'],
	 		'father_name'=>$_POST['fathers_name'],
	 		'address1'=>$_POST['a1'],
	 		'address2'=>$_POST['a2'],
	 		'current_city'=>$_POST['current_city'],
	 		'title'=>$title,
	 		'domain'=>$domain,
	 		'experiencefrom'=>$from,
	 		'experienceto'=>$to,
	 		'accomplishment_type'=>$_POST['accomplishmenttype'],
	 		'accomplishment_text'=>$_POST['accomplishmenttext']
	 	);
	 		$this->session->set_userdata($data);

	 		$result=$this->p->updateProfile($username,$data);
	 		if($result)
	 		{
 			echo "<script>alert('Updated Sucessfully');</script>";

	 			$this->session->set_userdata($data);
	 			$redirect='user/profile/'.$username;
	 			redirect($redirect);
	 		}
	 		else
	 		{
	 			echo "<script>alert('Please try again later');</script>";
	 		}


	 	}



	 $this->load->view('templates/header',$datum);
		$this->load->view('user/pro-edit',$pro);
		$this->load->view('templates/footer');	
	 }

	}

//for sending email



	 


}