<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
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
        $data['title'] = "All Slider Page";
        $data['sliders'] = $this->admin_model->slider_info();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/index');
        $this->load->view('admin/footer');
    }
    public function add_slider()
    {
            $this->form_validation->set_rules('slider_img', 'Image', 'required');
            $this->form_validation->set_rules('heading', 'Heading', 'required');

                $config['upload_path'] = './assets/upload/slider/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']  = '100';
                // $config['max_width']  = '1024';
                // $config['max_height']  = '768';
                $config['encrypt_name'] = TRUE;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if (!$this->upload->do_upload('slider_img')){

                    $this->session->set_flashdata('errors', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER'],'refresh'); 
                }else{
                    $data_upload_files = $this->upload->data();
                    $img = $data_upload_files['file_name'];
                    $data = array(
                        'pic' => $img,
                        'heading' => $this->input->post('heading'),
                        'details' => $this->input->post('details')
                    );
                $this->db->insert('slider', $data);
                $this->session->set_flashdata('success', ' Slider Image Added Succesfully!');
                redirect($_SERVER['HTTP_REFERER'],'refresh');
                }
    }
    public function edit_slider($id)
    {
        $this->form_validation->set_rules('new_img', 'Image ', 'required');

        if (!$this->form_validation->run()) {

            $old_img = $this->input->post('old_img');
            $new_img = $_FILES['new_img']['name'];
            $new_img = stripslashes($new_img);
            $new_img = strtolower($new_img);
            if(strlen($new_img) > 8) {
              $new_img = substr($new_img, -8);  
            }

           if ($new_img == TRUE) {

               #$update_filename = time().rand(1000,9999).$_FILES['new_img']['name'];
               $update_filename = date("Y_m_d") . "_" . time() . "_" . rand(1, 999) . $new_img;
               $config = array(
                    'upload_path' => './assets/upload/slider/',
                    'allowed_types' => 'gif|jpg|png',
                    'file_name' => $update_filename,
               );

               $this->load->library('upload', $config);
               $this->upload->initialize($config);
               ///Old Image Unlink 
               if ($this->upload->do_upload('new_img')){
                    if (file_exists('./assets/upload/slider/'.$old_img)) {
                        unlink('./assets/upload/slider/'.$old_img);
                    }
               }
           }
           else{

            $update_filename = $old_img;

           }
           $data = array(
                'pic' => $update_filename,
                'heading' => $this->input->post('heading'),
                'details' => $this->input->post('details')
           );  
     
           $this->db->where('id', $id);
           $this->db->update('slider', $data);
           $this->session->set_flashdata('success', ' Slider Update Succesfully!');
           redirect($_SERVER['HTTP_REFERER'],'refresh');
           #redirect('news','refresh');
        }
        else{
            $this->session->set_flashdata('errors', $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER'],'refresh');
            #redirect('news','refresh');
            #return $this->edit($id);
        }
    //end Update Slider Function
    }
    public function delete_slider($id)
    {
        $data = array(
            'sts' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('slider', $data);
        
        $this->session->set_flashdata('success', 'Delete Successfully!');
        redirect($_SERVER['HTTP_REFERER'],'refresh');
     }


// Controller End
}