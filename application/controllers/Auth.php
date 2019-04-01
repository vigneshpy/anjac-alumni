<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{


public function __construct()
    {
        parent::__construct();
        $this->load->database();

          
            
    
    }

    public function login()
    {

    
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $this->form_validation->set_rules('useremail', 'Email', 'trim|xss_clean|required', array(
                'required' => 'Email Does Not Exists'
            ));
            $this->form_validation->set_rules('userpass', 'Password', 'trim|required|xss_clean');
            
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'email' => $this->input->post('useremail'),
                    'password' => md5($this->input->post('userpass')),
                    
                    
                );
               
                $this->load->model('auth_models');
                
                
                $user = $this->auth_models->getlogin($data);
              

                if ($user) {

                    if($user->active==1)

                    {


                        

                    $pass = array(
                        'alumni_id' => $user->alumni_id,
                        'fname' => $user->fname,
                        'user_name'=>$user->user_name,
                        'lname' => $user->lname,
                        'email' => $user->email,
                        'pno' => $user->pno,
                        'course' => $user->course,
                        'branch' => $user->branch,
                        'ye' => $user->year_grad,
                        'yg' => $user->year_entry,
                        'rollno' => $user->rollno,
                        'dob' => $user->dob,
                        'place' => $user->place,
                        'active' => $user->active,
                        'profile_pic'=>$user->profile_pic,
                    );
                    
                    $_SESSION['user_logged'] = TRUE;
                    
                    if(isset($this->session->last_page))
                    {    $this->session->set_userdata($pass);
                        redirect($this->session->last_page);
                    }
                        else{
                    
                    // $this->session->set_flashdata('success','You are now logged in');
                    
                    $this->session->set_userdata($pass);

                    redirect('user/profile/' . $this->session->user_name, 'refresh');
                }

                }
                else
                {
                   $this->session->set_flashdata('warning', 'Account Seems to  be Inactive Check Your Mail');
                    
                    redirect('login', 'refresh');  
                }
                    
                } else {
                    $this->session->set_flashdata('error', 'Email or Password Incorrect');
                    
                    redirect('login', 'refresh');
                }
                
            }
            
        }
        // 
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
        
    }
    
    public function register()
    {
        
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('fname', 'firstname', 'trim|xss_clean|required');
            $this->form_validation->set_rules('lname', 'lastname', 'trim|xss_clean|required', array(
                'required' => 'oops you miss this field '
            ));
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|is_unique[register.email]', array(
                'is_unique' => 'Email Already Exists'
            ));
            
            $this->form_validation->set_rules('pno', 'Mobile No', 'trim|required|min_length[10]', array(
                'min_length' => 'Enter an Valid Mobile Number',
                'required' => '%s is required'
            ));
            $this->form_validation->set_rules('p1', 'Password', 'trim|xss_clean|required', array(
                'required' => 'oops you miss this field '
            ));
            $this->form_validation->set_rules('cp', 'Confirm Password', 'trim|xss_clean|required|matches[p1]', array(
                'required' => 'oops you miss this field ',
                'matches' => 'Password Does not matches'
            ));
            
            
            if ($this->form_validation->run() == FALSE) {



                
                
                
            } else {
                

            $numbers = rand(100, 1000);
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
      
            $username=$fname."-".$lname."-".$numbers;



                $data = array(
                    
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'user_name'=>$username,
                    'email' => $_POST['email'],
                    'pno' => $_POST['pno'],
                    'password' => $_POST['p1'],
                    'created_date' =>date("d/m/Y"),
                    'session_' => TRUE
                    
                    
                );

                print_r($username);
                
                $this->session->set_userdata($data);
                $this->session->set_flashdata('warning', 'Fill Out The Neccessary Fields');
                redirect('basicinfo', 'refresh');
                
                
                
                
                
                
                
                
                //         
                
            }
            
            
        }
        
        
        
        $this->load->view('templates/header');
        $this->load->view('auth/register_form');
        $this->load->view('templates/footer');
        
        
        
        
    }
    
    public function register2()
    {
        if (!($this->session->userdata('session_') == TRUE)) {
            redirect('auth/register');

        }
        
        else {
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");

               $this->load->model('auth_models','a');
                $data['course']=$this->a->fetch_course();
                 $data['branch']=$this->a->fetch_branch();
          
            if (isset($_POST['createaccount'])) {

            
                $this->form_validation->set_rules('course', 'Course', 'trim|xss_clean|required');
                $this->form_validation->set_rules('branch', 'Branch', 'trim|xss_clean|required', array(
                    'required' => 'oops you miss this field '
                ));
                $this->form_validation->set_rules('ye', 'Year of Entry', 'trim|xss_clean|required', array(
                    'required' => 'Year of entry is required'
                ));
                
                $this->form_validation->set_rules('yg', 'Year of Entry', 'trim|xss_clean|required', array(
                    'required' => 'Year of Gradution is required'
                ));
                $this->form_validation->set_rules('yg', 'Year of Gradution', 'trim|xss_clean|required', array(
                    'required' => 'Year of Gradution is required'
                ));
                $this->form_validation->set_rules('dob', 'dob', 'trim|xss_clean|required', array(
                    'required' => 'Your DOB is required'
                ));
                $this->form_validation->set_rules('place', 'place', 'trim|xss_clean|required', array(
                    'required' => 'Your Place is required'
                ));
                
                
                if ($this->form_validation->run() == FALSE) {
                    
                    
                    
                }
                
                else {
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $set  = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $code = substr(str_shuffle($set), 0, 12);
                        
                        
                        
                        $fname  = $this->session->userdata('fname');
                        $lname  = $this->session->userdata('lname');
                        $email  = $this->session->userdata('email');
                        $pno    = $this->session->userdata('pno');
                        $pass   = $this->session->userdata('password');
                        $username=$this->session->userdata('user_name');
                        $ye     = $_POST['ye'];
                        $yg     = $_POST['yg'];
                        $course = $_POST['course'];
                        $branch = $_POST['branch'];
                        $rno    = $_POST['rno'];
                        $dob    = $_POST['dob'];
                        $place  = $_POST['place'];

                        
                        
                     
                        $ins = array(
                            
                            'fname' => $fname,
                            'lname' => $lname,
                            'user_name'=>$username,
                            'email' => $email,
                            'profile_pic'=>base_url().'assets/images/default/prom.jpg',
                            'pno' => $pno,
                            'password' => $pass,
                            'course' => $course,
                            'branch' => $branch,
                            'year_entry' => $ye,
                            'year_grad' => $yg,
                            'rollno' => $rno,
                            'dob' => $dob,
                            'place' => $place,
                            'created_date' => date('Y-m-d'),
                            'active' => 'false'
                            
                        );
                        $this->load->model('auth_models');
                        
                        
                        
                        
                        $id = $this->auth_models->insert_user($ins);
         
                        
                        $token = array(
                            'token' => $code,
                            'time' => date('Y-m-d H:i:s'),
                            'id' => $username
                        );
                        
                        
                        $tok = $this->auth_models->insert_token($token);
                        
                        
                     
                        
                        
                        
                        $cod = array(
                            'code' => $code,
                            'id' => $username,
                            'fname' => $fname,
                            'email' => $email
                        );
                        $this->session->set_userdata($cod);
                        
                        $message = $this->load->view('email/body', $cod, TRUE);
                        
                        
                        // $this->email->initialize($config);
                        
                        $this->load->library('email');
                        $this->email->from('alumnianjac@gmail.com', 'Anjac');
                        $this->email->to($email, $this->session->userdata('fname'));
                        $this->email->subject('Account Activation');
                        $this->email->message($message);
                        if ($this->email->send()) {
                            $this->session->set_flashdata('warning', 'Please Verify Your Email To Continue Login');
                            
                            redirect('login', 'refresh');
                        } else {
                             print_r($this->email->print_debugger());
                            // $this->session->set_flashdata('error','Some thing Went Wrong');
                            
                            redirect('basicinfo', 'refresh');
                            
                        }
                        
                        
                        
                    }
                }
            }
            $this->load->view('templates/header',$data);
            $this->load->view('auth/register2');
            $this->load->view('templates/footer');
        }
    }
    
    public function activate()
    {
        $id   = $this->uri->segment(3);

        echo"<script>alert('$id')</script>";

        $code = $this->uri->segment(4);
        //fetch user details
        $this->load->model('auth_models');
        $user  = $this->auth_models->getUser($id);
        //get the token from the database
        $fetch = $this->auth_models->gettoken($id);

        print_r($fetch);
        
        
        
        if ($fetch != '') {
            
            //check
            
            
            if ($this->session->userdata('code') == $fetch->token) {
                
                if ($fetch->clicked == 0) {
                    
                    $data['active'] = 1;
                    $query = $this->auth_models->activate($data, $id);

                    print_r($query);
                    
                    if ($query) {
                        $this->session->set_flashdata('success', 'User activated successfully');
                        $tok     = $fetch->token;
                        $clicked = $this->auth_models->activate_token($tok);
                        
                    } else {
                        $this->session->set_flashdata('error', 'Something went wrong in activating account');
                    }
                    
                    
                    
                }
                
                
                else {
                    $this->session->set_flashdata('error', 'Link expired');
                }
                
                
            } else {
                $this->session->set_flashdata('error', 'Cannot activate account. Code didnt match');
            }
            
        }
        
        
        redirect('login');
        
    }
    
    
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        // 
        redirect('auth/login', 'refresh');
    }
    
    
    public function forgot()
    {
       
        if (isset($_POST['forgot'])) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email', array(
                'Your Email Address is required'
            ));


            
            if ($this->form_validation->run() === TRUE) {
                $femail = $this->input->post('email');
                $this->load->model('auth_models');
                $id = $this->auth_models->getid($femail);
             
                $user = $this->auth_models->forgot($femail);
     
                            if ($user) {
                    $set  = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $code = substr(str_shuffle($set), 0, 24);
                    
                    
                    $cod = array(
                        'code' => $code,
                        'email' => $femail,
                        'id' => $id->user_name
                    );

                    $token_reset=array(
                    	'token'=>$code,
                    	'time'=>date('Y-m-d H:i:s'),
                    	'id'=>$id->user_name);

                    	$this->auth_models->insert_token_reset($token_reset);

                    
                    
                    $message = $this->load->view('email/reset_pass', $cod, TRUE);
                    $this->load->library('email');
                    $this->email->from('alumnianjac@gmail.com', 'Anjac');
                    $this->email->to($femail);
                    
                    $this->email->subject('Password Reset');
                    $this->email->message($message);

                   

                    if ($this->email->send()) {
                        $this->session->set_flashdata('warning', 'We have sent an email. Click the link in the email to reset your password.');
                        
                        redirect('login', 'refresh');

                    

                    } else {
                        $this->session->set_flashdata('error', 'Please Try again later');
                       
                        // redirect('login', 'refresh');
                        
                    }
                    
                    
                } else {
                    $this->session->set_flashdata('error', 'No Such Account exists');
                    
                    redirect('forgot', 'refresh');
                }
                
                
                
                
                
                
            }
            // 
            
        }
        $this->load->view('templates/header');
        $this->load->view('auth/forgot');
        $this->load->view('templates/footer');
    }
    
    public function change()
    {
        $id   = $this->uri->segment(3);
        $code = $this->uri->segment(4);

        $this->load->model('auth_models');
 
        
        $reset=$this->auth_models->get_token_reset($code);

       
        if ($code == $reset->token) 
        {
        	if ($reset->clicked ==1)
            { 

            	$this->session->set_flashdata('error', 'Link Expired');
                 redirect('login', 'refresh');

            }
            
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->form_validation->set_rules('p1', 'Password', 'trim|xss_clean|required', array(
                    'required' => 'oops you miss this field '
                ));
                $this->form_validation->set_rules('p2', 'Confirm Password', 'trim|xss_clean|required|matches[p1]', array(
                    'required' => 'oops you miss this field ',
                    'matches' => 'Password Does not matches'
                ));
                
                if ($this->form_validation->run() == FALSE) {
                    
                    
                    
                    
                } else {
                    
                    $pass = md5($this->input->post('p1'));
                    $data['password'] = $pass;
                    $this->load->model('auth_models');
                    $query = $this->auth_models->updatepass($id, $data);

                    $this->auth_models->activate_token_reset($code);


                    
                    if ($query) {
                        $this->session->set_flashdata('success', 'password updated Successfully');
                        redirect('login', 'refresh');
                        
                        
                    } else {
                        $this->session->set_flashdata('error', 'Something went wrong ');
                        redirect('login', 'refresh');
                    }
                    
                    
                }
                
                
            }
            
        } 
        else {
            $this->session->set_flashdata('error', 'Sorry Something Went Wrong');
            redirect('login', 'refresh');
        }
        
        
        $this->load->view('templates/header');
        $this->load->view('auth/pass');
        $this->load->view('templates/footer');
        
        
        
    }
    
public function resend_mail()
{  
          
 if (isset($_POST['resend'])) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email', array(
                'Your Email Address is required'
            ));


            
            if ($this->form_validation->run() === TRUE) {



                $femail = $this->input->post('email');
                $this->load->model('auth_models');
                $id = $this->auth_models->getall($femail);
                    if($id->active==0)
                    {
                $user = $this->auth_models->forgot($femail);
                print_r($user);
    if ($user) {
       $set  = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $code = substr(str_shuffle($set), 0, 12);
                           
                        $username=$id->user_name;
                        $fname=$id->fname;
                        $email=$id->email;
                        $token = array(
                            'token' => $code,
                            'time' => date('Y-m-d H:i:s'),
                            'id' => $username);
                        $tok = $this->auth_models->insert_token($token);
                     $cod = array(
                            'code' => $code,
                            'id' => $username,
                            'fname' => $fname,
                            'email' => $email);
                        $this->session->set_userdata($cod);
                        $message = $this->load->view('email/body', $cod, TRUE);
                        $this->load->library('email');
                        $this->email->from('alumnianjac@gmail.com', 'Anjac');
                        $this->email->to($email, $this->session->userdata('fname'));
                        $this->email->subject('Account Activation');
                        $this->email->message($message);
                        if ($this->email->send()) {

                            $this->session->set_flashdata('warning', 'Another Verification Link Sent To Your Email');
                            
                            redirect('login', 'refresh');
                        } else {
                            $this->session->set_flashdata('error','Some thing Went Wrong');
                            
                            redirect('login', 'refresh');
                        }

                    }
                    else
                    {
                         $this->session->set_flashdata('error', 'No Such Account exists');
                    
                    redirect('auth/resend', 'refresh');
                    }

                }
                else
                {
                         $this->session->set_flashdata('success', 'Account Already activated');
                    
                    redirect('login', 'refresh');
                }

}
        
                        
}

$this->load->view('templates/header');
$this->load->view('auth/resend');
$this->load->view('templates/footer');

     
    }


    
    
    
}