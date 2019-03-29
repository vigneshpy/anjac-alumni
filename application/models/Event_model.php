<?php

class event_model extends CI_Model
{

public function __construct() 
{
    parent::__construct();
    $this->load->database();

}

public function get_events()

{		$sql="SELECT event_name,event_description,DATE_FORMAT(event_date, ' %b %d %Y') AS event_date,DATE_FORMAT(event_time, '%h:%i %p')AS event_time FROM events order by event_date ASC limit 5";
	$query=$this->db->query($sql);
	return $query->result_array();
	
}

public function  get_proposed_events()
{
	$sql="SELECT event_name,event_description,student_participate,first_name,last_name,email,DATE_FORMAT(event_date, ' %b %d %Y') AS event_date FROM proposed_event WHERE approved=1 AND denied=0 order by event_date ASC limit 5";
	$query=$this->db->query($sql);

	return $query->result_array();
}


public function insert_prpose_event($event)
{
	$sql=$this->db->insert('proposed_event',$event);


}





}



