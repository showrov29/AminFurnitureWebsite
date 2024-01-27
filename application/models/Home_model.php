<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function slider_info()
    {
        $query = $this->db->select('*')->from('slider')->where('sts', 1)->order_by('id', 'desc')->limit(3)->get();
        return $query->result();
    }  
    public function product_info()
    {
        $query = $this->db->select('*')->from('product')->get();
        return $query->result();
    } 
    public function  details($id){
        return $this->db->get_where('product', ['id' => $id])->row();
    }
    public function category($category){
        return $this->db->select('*')->from('product')->where('category', $category)->get()->result();
    }
// Home Model End
}