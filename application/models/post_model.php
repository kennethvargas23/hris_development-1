<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		// $this->db->db_debug = FALSE;
	}
	public function post_get($filter = null){

		if (!is_null($filter)) {
			$filter = array(
			'type_name'=>$filter
			);
		$result =  $this->db->where($filter)->join('account','post_author=account_id')
											->join('post_type','post_type=type_id')
											->order_by('post_dateCreated','DESC')
											->get('post')->result_array();
		}
		else{
			$result =  $this->db->join('account','post.post_author=account.account_id')
											->join('post_type','post_type=type_id')
											->order_by('post_dateCreated','DESC')
											->get('post')->result_array();
		}
		
		return $result;
	}
	function post_add($data){
		$this->db->insert('post',$data);
		return true;
	}
	function post_view($id){
		$result =  $this->db->where('post_id',$id)
		->join('account','post_author=account_id')
		->join('post_type','post_type=type_id')
		->get('post')->result_array();
		return $result[0];
	}
	function post_type($data){
		$result = $this->db->where('type_name',$data)->get('post_type')->result_array();
		return $result[0]['type_id'];
	}
	function post_delete($id){
		$this->db->delete('post',array('post_id'=>$id));
		return true;
	}
	
}