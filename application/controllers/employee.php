<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
	}
	public function index(){
		if ($this->session->has_userdata('logged_in')) {
			$userdata = $this->session->userdata('logged_in');
			switch ($userdata['type_name']) {
				case 'admin':
					$data['active'] = 'employee';
					$data['title'] = 'Employee';
					$data['employees'] = $this->employee_model->employee_get();
					$this->load->view('admin_dashboard_employee',$data);
					break;
				case 'user':
					echo "this is user";
					break;
			}
		}
		else {
			echo "you should login";
		}
	}
	public function employee_get(){
$this->load->library('pagination');

	
	}
	public function employee_view($id){
		$data = array('employee_id'=>$id);
		$data['employees'] = $this->employee_model->employee_view($data);
		$data['active'] = 'employee';
		$data['title'] = 'Employee';
		
		$this->load->view('admin_dashboard_employee_view',$data);
	}
	public function employee_search(){

	}
	public function employee_add(){
		echo "adding employee now";
	}
	public function employee_edit($id){
		echo "editing ".$id;

	}
	public function sample(){

		echo $this->input->get('id');
	}
}
