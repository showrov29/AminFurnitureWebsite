<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 public function __construct() {

        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $session_id = $this->session->userdata('session_id'); 
        $user_type = $this->session->userdata('user_type'); 
        if($session_id == NULL ) {
            $this->session->set_flashdata('errors', ' Please Login First!');
			redirect('auth/login','refresh');
        }
        if(($user_type!= "admin") AND ($user_type!=2) AND ($user_type!=3)) {
            $this->session->set_flashdata('errors', ' Please Login First!');
			redirect('auth/login','refresh');
        } 
        #$this->load->model('admin/common_model');   
    }
    ////construct End

	public function index()
	{
		$data['title'] = 'Dashboard Page';
		$this->load->view('admin/dashboard', $data);
	}
	public function index2()
	{
		echo "Editor";
	}
	public function index3()
	{
		echo "Writer";
	}
	public function profile_edit()
	{
		$data['title'] = 'Profile Edit Page';
	    $this->load->view('admin/profile_edit', $data);
	}
	public function profile_update()
	{
		print_r($_POST);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */