<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {
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
        $this->load->model('admin_model');   
    }
    ////construct End
    public function index()
    {
        $data['title'] = "Sub Category Page";
        $data['categories'] = $this->admin_model->category_info();
        $data['scategories'] = $this->admin_model->scategory_info();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/scategory/index');
        $this->load->view('admin/footer');
    }
    public function add_scategory()
    {
                $this->form_validation->set_rules('s_name', 'Sub Category Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata('errors', 'Sub Category Name Required!');
                redirect('subcategory','refresh');

                $data['title'] = 'Sub Category Page';
                $this->load->view('admin/header', $data);
                $this->load->view('admin/scategory/index');
                $this->load->view('admin/footer');
                }
                else {
                $data = array(
                    'cat_id' => $this->input->post('cat_id'),
                    'name' => $this->input->post('s_name')
                );
                #$this->Add_gallery->insert_gallery($data);
                $this->db->insert('cat_s', $data);
                $this->session->set_flashdata('success', ' Sub Category Name Added Succesfully!');
                redirect('subcategory','refresh');
                // echo "<pre>";
                // print_r($data);
        }
    }
    public function edit_scategory($id)
     {
        if ($this->input->post('cat_m_id')) {
            $data = array(
                'cat_id' => $this->input->post('cat_m_id'),
                'name' => $this->input->post('scategory_name')
            );
            $this->db->where('id', $id);
            $this->db->update('cat_s', $data);

        $this->session->set_flashdata('success', 'Sub Category Name Update Succesfully!');
                redirect($_SERVER['HTTP_REFERER'],'refresh');
     }else{
        $this->session->set_flashdata('errors', 'Sub Category Name Update Failed!');
                redirect($_SERVER['HTTP_REFERER'],'refresh');
     }
    }
    public function delete_scategory($id)
    {
        $data = array(
            'sts' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('cat_s', $data);
        
        $this->session->set_flashdata('success', 'Delete Successfully!');
        redirect('subcategory','refresh');
     }

/* End of file SubCategory.php */
/* Location: ./application/controllers/subCategory.php */
}
