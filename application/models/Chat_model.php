	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chat_model extends CI_Model {  
  
	public function add_message($message, $nickname)
	{
		$data = array(
			'message'	=> $message,
			'nickname'	=> $nickname,
			
			'timestamp'	=> time(),
		);
		  
		$this->db->insert('messages', $data);
	}
 
	function get_messages()
	{
		// $this->db->where('timestamp', $timestamp);
		// $this->db->order_by('timestamp', 'DESC');
		// $this->db->limit(10); 
		$query=$this->db->query('SELECT * FROM `messages`  ORDER BY `timestamp` DESC LIMIT 10');
		// $query = $this->db->get('messages');
		
		return array_reverse($query->result_array());
	}
 
}