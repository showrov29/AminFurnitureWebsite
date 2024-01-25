<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $session_id = $this->session->userdata('session_id');
        if($session_id = TRUE) {
            #$this->session->set_flashdata('toast', ' You Are Already Logged-in!');
			#redirect('dashboard','refresh');
        }
        /// Admin Model 
        $this->load->model('auth_model');
    }

	public function index()
	{
		$data['title'] = 'login Page';
		$this->load->view('login', $data);
		
	}
	public function login()
	{
		$data = array(
            'email'     => trim($this->input->post('email',TRUE)),
            'password'  => trim($this->input->post('password',TRUE))
        );
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[2]|max_length[15]');

         if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('error', $data['errors']);
				$data['title'] = "Login Page";
				$this->load->view('login',$data);
				#redirect(base_url('admin/auth/login'),'refresh');
			}else {

            	$data = $this->auth_model->user_login($data);

	            if($data>0){
	            	/// update User Login Time
	                $update_login_time = date("Y-m-d h:i:s");
	                $ip = $this->input->ip_address();
	                $id = $data['id'];
	                $dd = array('login_time'=>$update_login_time,'ip'=>$ip);
	                
	                $this->db->where('id',$id)->update('ci_admin',$dd);

	                $session_data = array(
	                    'id'        => $data['id'],
	                    'name'      => $data['name'],
	                    'username'  => $data['username'],
	                    'user_type' => $data['user_type'],
	                    'email'     => $data['email'],
	                    'session_id'=> session_id(),
	                    'logged_in' => TRUE
	                );
	             	//// Session Set 
	                $this->session->set_userdata($session_data);
	            	/// Verification email Address
					/*if($data['verification_type'] == 0){
						$this->session->set_flashdata('errors', 'Please verify your email address!');
						redirect(base_url('auth'));
						exit();
					}*/
					/// Verification User Active Or Inactive
					if($data['sts'] == 0){
						$this->session->set_flashdata('errors', 'Account is disabled by Admin!');
						redirect(base_url('auth'));
						exit();
					}
					/// Verification User Type
	                if($data['user_type'] == 'admin'){
	                	$this->session->set_flashdata('toast_success', 'Welcome '. $data['name'].'!');
	                    redirect("admin");

	                }else if ($data['user_type'] == 'user') {
	                	$this->session->set_flashdata('toast_success', 'Welcome '. $data['name'].'!');
	                    redirect("user");

	                }else {
	                    $this->session->set_flashdata('errors', 'Invalid Email Address or Password!');
						redirect(base_url('auth'));
	                }

            } else {

                $this->session->set_flashdata('errors', 'Invalid Email Address or Password!');
				redirect(base_url('auth'));

            }
        }
    }
 public function logout() {
        $post_by = $this->session->userdata('id');
        $time_stmp = date('Y-m-d H:i:s');
        $data_arr = array(
            'logout_time' => $time_stmp
        );
        $this->db->where('id', $post_by);
        $this->db->update('ci_admin', $data_arr);

        $this->session->sess_destroy();
	 	$this->session->set_flashdata('success', 'Logout Successfully!');
	 	#redirect(base_url('admin/auth/login'), 'refresh');
	 	$data['title'] = "Logout Page";
	 	$this->load->view('login',$data);
    }

    //CI_Controller End
}
