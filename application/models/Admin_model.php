<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function category_info()
    {
        $query = $this->db->select('*')->from('cat_m')->where('sts', 1)->order_by('id', 'asc')->get();
        return $query->result();
    } 
    public function category_edit($id)
	{
		$query = $this->db->select('*')->from('cat_m')->where('id', $id)->where('sts', 1)->get();
		return $query->result();
	}
    public function scategory_info()
    {
        $query = $this->db->select('*')->from('cat_s')->where('sts', 1)->order_by('id', 'asc')->get();
        return $query->result();
    }
    public function scategory_edit($id)
	{
		$query = $this->db->select('*')->from('cat_s')->where('id', $id)->where('sts', 1)->get();
		return $query->result();
	}
	public function product_info()
    {
        $query = $this->db->select('*')->from('product')->where('sts', 1)->order_by('id', 'asc')->get();
        return $query->result();
    }
    public function slider_info()
    {
        $query = $this->db->select('*')->from('slider')->where('sts', 1)->order_by('id', 'asc')->get();
        return $query->result();
    }
// Admin Model End
}