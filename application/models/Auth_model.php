<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function user_login($data) {
       
        $query = $this->db->select('*')
        ->from('ci_admin')
        ->where('email', trim($data['email']))
        ->where('password', md5($data['password']))
        ->where('sts', 1)
        ->get();


        if ($query->num_rows()!=0) {
            $row = $query->row_array();
           
            return $row;
        }
    }

}
