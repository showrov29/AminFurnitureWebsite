<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
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
        $this->load->helper( 'utility' );
        #$this->load->model('admin/common_model');   
    }
    ////construct End
    public function index()
    {
        $data['title'] = "Supplier List";
        $this->load->view('admin/supplier/header', $data);
        $this->load->view('admin/supplier/index');
        $this->load->view('admin/supplier/footer');
    }
    public function add_supplier()
    {
                $this->form_validation->set_rules('name', 'Supplier Name', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|is_unique[ci_supplier.mobile]',array(
                                #'required'      => 'You have not provided %s.',
                                'is_unique'     => 'This %s is already exists.'
                        ) );
                if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata('errors', validation_errors());
                redirect('supplier','refresh');

                $data['title'] = "Supplier List";
                 $this->load->view('admin/supplier/header', $data);
                 $this->load->view('admin/supplier/index');
                 $this->load->view('admin/supplier/footer');
                }
                else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'business_name' => $this->input->post('business_name'),
                    'mobile' => $this->input->post('mobile'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address')
                );
                $this->db->insert('ci_supplier', $data);
                $this->session->set_flashdata('success', ' Supplier Name Added Succesfully!');
                redirect('supplier','refresh');
                // echo "<pre>";
                // print_r($data);
        }
    }
    public function update_supplier($id)
     {
        if ($this->input->post('cat_id')) {
            $category = $this->input->post('cat_id');
            $category_details = array(
                'name' => $category
            );
            $this->db->where('id', $id);
            $this->db->update('ci_category', $category_details);

        $this->session->set_flashdata('success', ' Category Name Update Succesfully!');
                redirect('category','refresh');
     }else{
        $this->session->set_flashdata('errors', ' Category Name Update Failed!');
                redirect('category','refresh');
     }
    }
    public function delete_supplier($id)
    {
        $data = array(
            'sts' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('ci_supplier', $data);
        
        $this->session->set_flashdata('success', 'Delete Successfully!');
        redirect('supplier','refresh');
     }

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */
}
