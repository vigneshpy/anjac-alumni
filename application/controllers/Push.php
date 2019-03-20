<?php


class push extends CI_Controller
{

public function token()
{
	
	$this->load->model('push_model','p');

	$tok=$this->input->post('token');


	// $tok='ep5HL1p9x2c:APA91bGqRTwxYGXif1s0qPBPfCZE1Yhp3bc02S8F8XweJIPDp16ExRK3uJxjqsY0ccx5QTmWQbDAR-orsiXmxmOVp5CppiIznmggqYpEbS00UXKZHuWNXlRv4T7mhkvGt_YjmH-12eU7';
	$data=array(
		'token'=>$tok,
		'date'=>date('Y-M-D'),
	);

	$id=$this->p->savetoken($data);




}

public  function push_success()
{
	$this->load->helper(array('form', 'url'));
	$this->load->library('upload');

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$tok=$this->input->post('token');

			define("apikey",'AAAALbxh2ag:APA91bH-U5KIVJa5nN9B-U5lZbFnCdD9NPJjtuQHRy3vHa6T2HuTD_svUgI-t0M_G6BUqHGxIvT6QIfmvLDR16XP8R4DETr-IWHL5VhXsx8CP6ai22tatfDhfvtqlXAjLMDrfR9CCICR');
	
	$token=[$tok];






$header = [
		'Authorization: Key=' . apikey,
		'Content-Type: Application/json'
	];

$config=array();
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '100';


$this->load->library('upload',$config);

$this->upload->data();



	$msg = [
		'title' => $_POST['title'],
		'body' => $_POST['body'],
		'icon' => base_url().'/assets/images/pro.png',
		'image' => base_url().'/assets/images/pro.png',
		'url'=>$_POST['url'],
	];
	// $payload = [
	// 	'registration_ids' 	=> $token,
	// 	'notification'		=> $msg
	// ];
	$payload = array (
        'registration_ids' =>$token,
        'notification' => $msg);
        $curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload),
	  CURLOPT_HTTPHEADER => $header
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  // echo $response;
	}
	$data['pay']=$msg;
	$this->load->view('templates/admin-head',$data);
	$this->load->view('admin/notifications');
		$this->load->view('templates/admin-foot');




	
}


$this->load->view('push/success');
}

public function sendpush()
{

	$this->load->view('templates/admin-head');
		$this->load->view('admin/notifications');
		$this->load->view('templates/admin-foot');



}


}