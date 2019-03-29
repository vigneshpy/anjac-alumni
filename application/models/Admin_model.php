
<?php


class admin_model extends CI_Model

{

public function __construct() 
{
    parent::__construct();
    $this->load->database();

}



public function getadmin($data)
{

	$query=$this->db->get_where('admin',$data);

	return $query->row();

}



public function numberofuser()
{
	$query=$this->db->get_where('register',array('active'=>1));



	return $query->num_rows();
}


	public function getActiveUsers(){
		$query = $this->db->get_where('register',array('active'=>1));
		return $query->result_array(); 
	}
	public function getInActiveUsers(){
		$query = $this->db->get_where('register',array('active'=>0));
		return $query->result_array(); 
	}


	public function  user_delete($username)
	{
		$this->db->where(array('user_name' => $username));
			$query=$this->db->delete('register');

	}

	public function need_delete($id)
	{

		$this->db->where(array('need_id' => $id));
			$query=$this->db->delete('needs');


			$this->db->where(array('post_id' => $id));
			$query=$this->db->delete('comments');

	}


	public function  comment_delete($id)
	{

		$this->db->where(array('post_id' => $id));
		$query=$this->db->delete('comments');


	}




public function getneeds()
{
	$query=$this->db->get('needs');

	return $query->result_array();
}

public function getcomments()
{
	$query=$this->db->get('comments');

	return $query->result_array();
}


public function get_user_last_month()
{
	$query  = $this->db->query("SELECT  *  FROM register WHERE SUBSTRING(created_date FROM  1 FOR 7) =  SUBSTRING(CURRENT_DATE - INTERVAL 1 MONTH FROM 1 FOR 7) ");

	return $query->num_rows();
}


public  function get_user_given_month($month)
{
$query=$this->db->query("SELECT COUNT(EXTRACT(MONTH FROM created_date)) FROM register where EXTRACT(MONTH FROM created_date)=$month");

return $query->num_rows();
}
public  function get_user_given_date($date)
{
$query=$this->db->query("SELECT COUNT(EXTRACT(DAY FROM created_date)) FROM register where EXTRACT(DAY FROM created_date)=$date");

return $query->num_rows();

}

public  function get_user_given_year($year)
{
$query=$this->db->query("SELECT COUNT(EXTRACT(YEAR FROM created_date)) FROM register where EXTRACT(YEAR FROM created_date)=$month");

return $query->num_rows();
}

public function get_user_all_month()
{
	$query=$this->db->query("SELECT DATE_FORMAT(`created_date`,'%M') As months, COUNT(alumni_id) AS user_count FROM register GROUP BY MONTH(created_date)");


	return $query->result_array();
}

public function insert_event($data)
{

	$query=$this->db->insert('events',$data);

	
}
public function get_events()
{

	$sql="SELECT event_id,event_name,event_description,DATE_FORMAT(event_date, ' %b %d %Y') AS event_date,DATE_FORMAT(event_time, '%h:%i %p')AS event_time FROM events";
	
	$query=$this->db->query($sql);

	return $query->result_array();

	
}


public function event_delete($id)
{

$this->db->where(array('event_id' => $id));
			$query=$this->db->delete('events');


	
}
public function update_event($id)
{

$query=$this->db->query("SELECT * FROM events WHERE event_id='$id'");



return $query->row();
}

public function update_event1($id,$data)
{
	$this->db->set($data);
	$this->db->where('events.event_id', $id);


	$query=$this->db->update('events');
		print_r($query);
}


public function retrive_num_request()
{
	$query=$this->db->get_where('proposed_event',array('approved' => 0,'denied'=>0));
	return $query->num_rows();


}


public function  get_proposed_event_pending()
{
	$sql=$this->db->get_where('proposed_event',array('approved' => 0,'denied' => 0));

	return $sql->result_array();
}

public function  get_proposed_event_allowed()
{
	$sql=$this->db->get_where('proposed_event',array('approved' => 1,'denied' => 0));

	return $sql->result_array();
}

public function get_proposed_event_denied()
{
	$sql=$this->db->get_where('proposed_event',array('approved' => 0,'denied' => 1));

	return $sql->result_array();
}

public function allow_event($id)
{
	$this->db->set(array('approved' => 1,'denied' => 0));
	$this->db->where('propose_id', $id);


	$query=$this->db->update('proposed_event');
		
}

public function deny_event($id)
{
	$this->db->set(array('denied' => 1,'approved'=>0));
	$this->db->where('propose_id', $id);


	$query=$this->db->update('proposed_event');
		
}


	public function  deny_event_delete($id)
	{
		$this->db->where(array('propose_id' => $id));
			$query=$this->db->delete('proposed_event');

	}



}