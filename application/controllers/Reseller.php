<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {
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
		$data['title'] = 'Reseller Page';
		$this->load->view('admin/reseller/header', $data);
		$this->load->view('admin/reseller/index');
		$this->load->view('admin/reseller/footer');
	}
	
	public function add_user()
	{
		echo "<br>";
		print_r($_POST);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */