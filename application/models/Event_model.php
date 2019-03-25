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



public function wrapped_up_event($id)
{
	$sql="CREATE EVENT wrapped_up_event ON SCHEDULE(SELECT event_date FROM events where event_id=$id) 
	DO 
	SELECT * FROM events";



}


}



//event

// CREATE EVENT event_name
//     ON SCHEDULE
//       period_of_time
//     DO
//       your_code_here



// CREATE EVENT my_event
//   ON SCHEDULE
//     AT ('2014-04-30 00:20:00'+ INTERVAL 1 DAY) ON COMPLETION PRESERVE ENABLE 
//   DO
//     # My query