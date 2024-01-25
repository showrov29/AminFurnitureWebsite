<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {

        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $session_id = $this->session->userdata('session_id'); 
        $user_type = $this->session->userdata('user_type'); 
        if($session_id == NULL ) {
            $this->session->set_flashdata('errors', ' Please Login First!');
            redirect('auth/login','refresh');
        }
        if(($user_type!= "admin") AND ($user_type!="user")) {
            $this->session->set_flashdata('errors', ' Please Login First!');
            redirect('auth/login','refresh');
        } 
        $this->load->helper( 'utility' );
        #$this->load->model('admin/common_model');   
    }
    ////construct End

	public function index()
	{
		$data['title'] = 'Dashboard Page';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public function profile_edit()
	{
		$data['title'] = 'Profile Edit Page';
		$this->load->view('admin/profile_edit', $data);
	}
	public function general()
	 {
	 	if ($this->input->post('name')) {
	 		$name = $this->input->post('name');
	 		$mobile = $this->input->post('mobile');
	 		$email = $this->input->post('email');
	 		$business_name = $this->input->post('business_name');
	 		$data = array(
	 			'name'          => $name,
	 			'mobile'	    => $mobile,
	 			'email' 		=> $email,
	 			'business_name' => $business_name
	 		);
	 		$id = $this->session->userdata('id');
	 		$this->db->where('id', $id);
	 		$this->db->update('ci_admin', $data);

		 	$this->session->set_flashdata('success', 'General Info Update Succesfully!');
			redirect($_SERVER['HTTP_REFERER'],'refresh');
		 }else{
			 	$this->session->set_flashdata('errors', 'General Info Update Failed!');
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		 }
	}

	public function changePassword()
    {
        $this->form_validation->set_rules('old_password', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('password', 'new password', 'required');
        $this->form_validation->set_rules('c_password', 'confirm password', 'required|matches[password]');


        if($this->form_validation->run() == false) {
            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata('errors', validation_errors());
            redirect($_SERVER['HTTP_REFERER'],'refresh');
        }else {
            $id = $this->session->userdata('id');
            $new_pass = trim($this->input->post('password',TRUE));

            $data = array(
	 			'pass' 		=> $new_pass,
	 			'password'  => md5($new_pass)
	 		);
	 		$this->db->where('id', $id);
	 		$this->db->update('ci_admin', $data);
	 		$this->session->set_flashdata('success', 'New Password Update Succesfully!');
            redirect($_SERVER['HTTP_REFERER'],'refresh');
   		 }
   }
    public function password_check($oldpass)
    {
        $id = $this->session->userdata('id');
        $user = $this->db->select('*')->from('ci_admin')->where('id',$id)->get()->row();

        if($user->password !== md5($oldpass)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
    public function logo()
    {
        $data['title'] = "Logo Edit Page";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin/logo');
        $this->load->view('admin/footer');
    }
    public function logo_edit()
    {
                $this->form_validation->set_rules('logo', 'Logo', 'required');

                $config['upload_path'] = './assets/upload/logo/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']  = '100';
                // $config['max_width']  = '1024';
                // $config['max_height']  = '768';
                $config['encrypt_name'] = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if (!$this->upload->do_upload('logo')){
                    $this->session->set_flashdata('errors', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER'],'refresh'); 
                }else{
                    $data_upload_files = $this->upload->data();
                    $img = $data_upload_files['file_name'];
                    $data = array(
                        'logo' => $img
                    );
                $this->db->update('ci_settings', $data);
                $this->session->set_flashdata('success', ' Logo Image Set Succesfully!');
                redirect($_SERVER['HTTP_REFERER'],'refresh'); 
                }
    }

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
}
