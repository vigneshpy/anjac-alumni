<?php
class Search_model extends CI_Model
{
public function __construct() 
{
    parent::__construct();
    $this->load->database();
}
public function get_search($search)
{
	$query="SELECT * FROM register 
	WHERE LOWER(fname) LIKE '%$search%'

	 
  OR year_grad LIKE '%$search%'
   OR LOWER(course) LIKE '%$search%' 
  OR    LOWER(branch) LIKE '%$search%' 
  OR 
  year_entry LIKE '%$search%'
  OR LOWER(place) LIKE '%$search%'   ORDER BY 
CASE
    WHEN LOWER(fname) LIKE '$search' THEN 1
    WHEN LOWER(fname) LIKE '$search%' THEN 2
    WHEN LOWER(fname) LIKE '%$search' THEN 4
    ELSE 3
  END
,
CASE
    WHEN LOWER(course) LIKE '$search' THEN 1
    WHEN LOWER(course) LIKE '$search%' THEN 2
    WHEN LOWER(course) LIKE '%$search' THEN 4
    ELSE 3
  END,
  CASE
    WHEN (branch) LIKE '$search' THEN 1
    WHEN (branch) LIKE '$search%' THEN 2
    WHEN (branch) LIKE '%$search' THEN 4
    ELSE 3
  END,
  CASE
    WHEN LOWER(place) LIKE '$search' THEN 1
    WHEN LOWER(place) LIKE '$search%' THEN 2
    WHEN LOWER(place) LIKE '%$search' THEN 4
    ELSE 3
  END,
  CASE
    WHEN year_entry LIKE '$search' THEN 1
    WHEN year_entry LIKE '$search%' THEN 2
    WHEN year_entry LIKE '%$search' THEN 4
    ELSE 3
  END,
  CASE
    WHEN year_grad LIKE '$search' THEN 1
    WHEN year_grad LIKE '$search%' THEN 2
    WHEN year_grad LIKE '%$search' THEN 4
    ELSE 3
  END
  ";
	$sql=$this->db->query($query);
	return $sql->result_array();
}
}
