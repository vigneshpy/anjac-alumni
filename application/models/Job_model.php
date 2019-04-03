<?php


class job_model extends CI_Model
{

public function __construct() 
{
    parent::__construct();
    $this->load->database();

}

public function insert_job($data)
{
	$d=$this->db->insert('jobs',$data);

	return $d;
}
}

?>