<?php 


class Push_model extends CI_Model
{
	public function savetoken($data)
	{
		$this->db->insert('register', $data);
		return $this->db->insert_id(); 
		
	}


	

	public function savemessage($data)
	{
		$this->db->insert('pushmessage',$data);

	}
}