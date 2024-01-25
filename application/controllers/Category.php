<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
     public function __construct() {

        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $session_id = $this->session->userdata('session_id'); 
        $user_type = $this->session->userdata('user_type'); 
        if($session_id == NULL ) {
            $this->session->set_flashdata('errors', ' Please Login First!');
            redirect('auth/login','refresh');
        }
        if(($user_type!= "admin") AND ($user_type!='user')) {
            $this->session->set_flashdata('errors', ' Please Login First!');
            redirect('auth/login','refresh');
        } 
        $this->load->helper( 'utility' );
        #$this->load->model('admin/common_model');   
    }
    ////construct End
    public function index()
    {
        $data['title'] = "All Main Category Page";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/category/index');
        $this->load->view('admin/footer');
    }
    public function add_category2()
    {
                $this->form_validation->set_rules('category', 'Category Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata('errors', 'Category Name Required!');
                redirect('category','refresh');

                $data['title'] = "Main Category Page";
                 $this->load->view('admin/header', $data);
                 $this->load->view('admin/category/index');
                 $this->load->view('admin//footer');
                }
                else {
                $data = array(
                    'name' => $this->input->post('category')
                );
                #$this->Add_gallery->insert_gallery($data);
                $this->db->insert('cat_m', $data);
                $this->session->set_flashdata('success', ' Category Name Added Succesfully!');
                redirect('category','refresh');
                // echo "<pre>";
                // print_r($data);
        }
    }
    public function add_category()
   {
        $this->form_validation->set_rules('category_img', 'Image Name', 'required');
        $this->form_validation->set_rules('category', 'Category Name', 'required');

            $config['upload_path'] = './assets/upload/category/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size']  = '100';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['encrypt_name'] = TRUE;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('category_img')){

                $this->session->set_flashdata('errors', $this->upload->display_errors());
                redirect($_SERVER['HTTP_REFERER'],'refresh'); 
            }else{
                $data_upload_files = $this->upload->data();
                $img = $data_upload_files['file_name'];
                $data = array(
                    'pic' => $img,
                    'name' => $this->input->post('category')
                );
            $this->db->insert('cat_m', $data);
            $this->session->set_flashdata('success', ' Category Added Succesfully!');
            redirect($_SERVER['HTTP_REFERER'],'refresh');
            }
     }
   
    public function update_category($id)
        {
            $this->form_validation->set_rules('new_img', 'Image ', 'required');

        if (!$this->form_validation->run()) {

            $old_img = $this->input->post('old_img');
            $new_img = $_FILES['new_img']['name'];

           if ($new_img == TRUE) {

               #$update_filename = time().rand(1000,9999).$_FILES['new_img']['name'];
               $update_filename = date('Y-m-d-H-i-s').$new_img;
               $config = array(
                    'upload_path' => './assets/upload/category/',
                    'allowed_types' => 'gif|jpg|png',
                    'file_name' => $update_filename,
               );

               $this->load->library('upload', $config);
               $this->upload->initialize($config);
               ///Old Image Unlink 
               if ($this->upload->do_upload('new_img')){
                    if (file_exists('./assets/upload/category/'.$old_img)) {
                        unlink('./assets/upload/category/'.$old_img);
                    }
               }
           }
           else{
            $update_filename = $old_img;
           }
           $data = array(
                'pic' => $update_filename,
                'name' => $this->input->post('category')
            );

           $this->db->where('id', $id);
           $this->db->update('cat_m', $data);
           $this->session->set_flashdata('success', ' Category Update Succesfully!');
           #redirect($_SERVER['HTTP_REFERER'],'refresh');
           redirect($_SERVER['HTTP_REFERER'],'refresh');
        }
        else{
            $this->session->set_flashdata('errors', $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER'],'refresh');
        }
    //end Update Category Function
    }
    public function delete_category($id)
    {
        $data = array(
            'sts' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('cat_m', $data);
        
        $this->session->set_flashdata('success', 'Delete Successfully!');
        redirect('category','refresh');
     }

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */
}
