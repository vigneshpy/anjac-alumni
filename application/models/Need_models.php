<?php

class need_models extends CI_Model
{

function __construct() 
{
    parent::__construct();
    $this->load->database();

}


public function insertneed($data)
{

$query=$this->db->insert('needs',$data);


return $query;


}


public function showNeed()
{
	$this->db->order_by('need_id','desc');

	$query=$this->db->get('needs');

	return $query->result_array();
}



public function detailNeed($id)
{
	$query=$this->db->get_where('needs',array('need_id'=>$id));


	return $query->row();
}
public function insertcomment($data)
{

	$query=$this->db->insert('comments',$data);


}


public function showComments($id)
{


$query=$this->db->get_where('comments',array('post_id' =>$id));

return $query->last_row();
}

public function showComments1($id)
{


$query=$this->db->get_where('comments',array('post_id' =>$id));

return $query->result_array();
}




public function deleteneed($id)
{


$this->db->where(array('need_id' => $id ));

$query=$this->db->delete('needs');

$this->db->where(array('post_id' => $id ));

$query=$this->db->delete('comments');


}


public function deletecomment($id)
{


$this->db->where(array('comment_id' => $id ));
$query=$this->db->delete('comments');

}













}