<?php 


class auth_models extends CI_Model
{
	
		
	
		public function insert_user($user){
		$this->db->insert('register', $user);
		return $this->db->insert_id(); 
	}
	public function getAllUsers(){
		$query = $this->db->get('register');
		return $query->result(); 
	}
 
	public function getUser($id){
		$query = $this->db->get_where('register',array('alumni_id'=>$id));
		return $query->row_array();
	}
 
	public function activate($data, $id){
	

	$this->db->set($data);
$this->db->where('register.user_name',$id);
return $this->db->update('register'); 
	}

	public function getlogin($data)
	{

					$this->db->select('*');
					$this->db->from('register');
					$this->db->where($data);
					$query=$this->db->get();
					return $query->row();
					


	}



	public function forgot($email)
	{
		$query=$this->db->get_where('register',array('email'=>$email));

		return $query->row_array();
	}

	public function getid($email)
	{
		$this->db->select('user_name');
		$this->db->from('register');
		$this->db->where(array('email'=>$email));
		$query=$this->db->get();
		return $query->row();
	}
public function getall($email)
	{
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array('email'=>$email));
		$query=$this->db->get();
		return $query->row();
	}


	public function updatepass($id,$data)
	{

		$this->db->where('register.user_name', $id);
		return $this->db->update('register', $data);
	}
		
		public function insert_token($token)
		{	
			$query=$this->db->insert('token', $token);
			
	

		}
			
			public function gettoken($id)

		{

			
			$query=$this->db->query("SELECT * FROM `token` WHERE id='$id' ORDER BY token_id DESC");

		
			return $query->row();





		}	
		public function activate_token($token)
		{	$this->db->where('token.token', $token);
		return $this->db->update('token', array('clicked'=>1));


		
		}
		public function insert_token_reset($token)
		{	
			$query=$this->db->insert('reset', $token);
			
	

		}
			
			public function get_token_reset($code)

		{
			
			$query=$this->db->get_where('reset',array('token'=>$code));

			return $query->row();





		}	
		public function activate_token_reset($token)
		{	
			$this->db->where('reset.token', $token);
			$this->db->update('reset', array('clicked'=>1));


		
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