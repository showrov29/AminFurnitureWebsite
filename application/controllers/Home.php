<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->helper( 'utility' );
        $this->load->model('home_model');   
    }
    ////construct End
	public function index()
	{
		$data['title'] = "Home Page";
		$data['sliders'] = $this->home_model->slider_info();
		$this->load->view('design/header', $data);
		$this->load->view('design/index');
		$this->load->view('design/footer');
		#redirect('auth','refresh');
	}
	public function aboutus()
	{
		$data['title'] = "About us Page";
		#$data['sliders'] = $this->home_model->slider_info();
		$this->load->view('design/header', $data);
		$this->load->view('design/aboutus');
		$this->load->view('design/footer');
		#redirect('auth','refresh');
	}
	public function contactus()
	{
		$data['title'] = "Contact Us Page";
		$this->load->view('design/header', $data);
		$this->load->view('design/contact');
		$this->load->view('design/footer');
	}
	public function allproduct()
	{
		$data['title'] = "All Product Page";
		$data['products'] = $this->home_model->product_info();
		$this->load->view('design/header', $data);
		$this->load->view('design/all_product');
		$this->load->view('design/footer');
	}
	public function category($id)
	{
		$data['title'] = "All Product Page";
		$this->load->view('design/header', $data);
		$this->load->view('design/category');
		$this->load->view('design/footer');
	}
	public function details($id)
	{
		$data['title'] = "Product Details Page";
		$data['details'] = $this->home_model->details($id);
		$this->load->view('design/details2', $data);
	}

	public function services($param = null)
	{
		$validCategories = array('hospitals', 'category2', 'category3');

		// Check if $param is in the array of valid categories
		if (!in_array($param, $validCategories)) {
			// Redirect to 404 page
			show_404();
			return;
		}
		$data['title'] = "Hospital Design Page";
		$data['param'] = $param;
		$data['products'] = $this->home_model->category($param);
		$this->load->view('design/header', $data);
		$this->load->view('design/services', $data);
		$this->load->view('design/footer');
	}
	
}
