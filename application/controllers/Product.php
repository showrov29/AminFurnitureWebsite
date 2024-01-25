<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
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
        $this->load->model('admin_model');   
    }
    ////construct End
    public function index()
    {
        $data['title'] = "Product List";
        $data['products'] = $this->admin_model->product_info();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/index');
        $this->load->view('admin/footer');
    }
     public function add_product()
    {
        $data['title'] = "Add New Product";
        $data['categories'] = $this->admin_model->category_info();
        $this->load->view('admin/product/add_product',$data);
    }
    public function ajaxx()
    {
        if($this->input->post('main_category', true)!='') {
            $main_category = $this->input->post('main_category', true);
            echo "<option disabled>Select Your Sub Category</option>";
            $sub_category = $this->db->select('*')->from('cat_s')->where('cat_id', $main_category)->where('sts', 1)->get();
            foreach ($sub_category->result() as $key => $sub) {
                echo "<option value='$sub->id'>$sub->name</option>";
            }
        }
    }
    public function insert_product()
        {
            $this->form_validation->set_rules('product_img', 'Image Name', 'required');
            $this->form_validation->set_rules('name', 'Product Name', 'required');

                $config['upload_path'] = './assets/upload/product/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']  = '100';
                // $config['max_width']  = '1024';
                // $config['max_height']  = '768';
                $config['encrypt_name'] = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if (!$this->upload->do_upload('product_img')){

                    $this->session->set_flashdata('errors', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER'],'refresh'); 
                }else{
                    $data_upload_files = $this->upload->data();
                    $img = $data_upload_files['file_name'];
                    $data = array(
                        'cat_m_id'            => $this->input->post('main_category'),
                        /*'cat_s_id'            => $this->input->post('sub_category'),*/
                        'product_name'        => $this->input->post('product_name'),
                        'reguler_price'       => $this->input->post('reguler_price'),
                        'discount_price'      => $this->input->post('discount_price'),
                        'discount_percentage' => $this->input->post('discount_percentage'),
                        'discount_date'       => $this->input->post('discount_date'),
                        'pic' => $img,
                        'details' => $this->input->post('details')
                    );
                $this->db->insert('product', $data);
                $this->session->set_flashdata('success', ' Product Added Succesfully!');
                redirect('product','refresh');
                }
        }
        public function edit($id)
        {
            $data['title'] = "Edit Product";
            #$data['categories'] = $this->admin_model->category_info();
            $this->load->view('admin/product/edit_product',$data);
        }
        public function update_product($id)
        {
            $this->form_validation->set_rules('new_img', 'Image ', 'required');

        if (!$this->form_validation->run()) {

            $old_img = $this->input->post('old_img');
            ///
            $new_img  = $_FILES['new_img']['name'];
            $new_img  = stripslashes($new_img);
            $new_img  = strtolower($new_img);
            if(strlen($new_img ) > 8) {
              $new_img  = substr($new_img, -8);  
            }

           if ($new_img == TRUE) {

               #$update_filename = time().rand(1000,9999).$_FILES['new_img']['name'];
               $update_filename = date('Y_m_d_H_i_s')."_".rand(1, 999).$new_img;
               $config = array(
                    'upload_path' => './assets/upload/product/',
                    'allowed_types' => 'gif|jpg|png',
                    'file_name' => $update_filename,
               );

               $this->load->library('upload', $config);
               $this->upload->initialize($config);
               ///Old Image Unlink 
               if ($this->upload->do_upload('new_img')){
                    if (file_exists('./assets/upload/product/'.$old_img)) {
                        unlink('./assets/upload/product/'.$old_img);
                    }
               }
           }
           else{
            $update_filename = $old_img;
           }
           $data = array(
                'cat_m_id'            => $this->input->post('main_category'),
                /*'cat_s_id'            => $this->input->post('sub_category'),*/
                'product_name'        => $this->input->post('product_name'),
                'reguler_price'       => $this->input->post('reguler_price'),
                'discount_price'      => $this->input->post('discount_price'),
                'discount_percentage' => $this->input->post('discount_percentage'),
                'discount_date'       => $this->input->post('discount_date'),
                'pic' => $update_filename,
                'details' => $this->input->post('details')
            );

           $this->db->where('id', $id);
           $this->db->update('product', $data);
           $this->session->set_flashdata('success', ' Product Update Succesfully!');
           #redirect($_SERVER['HTTP_REFERER'],'refresh');
           redirect('product','refresh');
        }
        else{
            $this->session->set_flashdata('errors', $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER'],'refresh');
        }
    //end Update Product Function
    }

///// End Controller

}