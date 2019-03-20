<?php

class profile_models extends CI_Model
{

function __construct() 
{
    parent::__construct();
    $this->load->database();

}


public function showProfile($username)
{

	


// 
$query=$this->db->get_where('register',array('user_name'=>$username));




return $query->row();





}


public function updateProfile($username,$data)
{

$this->db->set($data);
$this->db->where('user_name',$username);
$query=$this->db->update('register'); 


return $query;


}


public function fetch_course()
		{
			$query=$this->db->get('course');

			return $query->result();
		}	

		public function fetch_branch()
		{
			$query=$this->db->get('branch');

			return $query->result();

		}




}