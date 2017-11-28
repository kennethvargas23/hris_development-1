<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function authentication_login($data){
		$result = $this->db->where($data)->join('account_type','account_type=type_id')->get('account');
		if ($result->num_rows()==1){
			$result = $result->result_array();

				$this->session->set_userdata('logged_in',$result[0]);
		
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}