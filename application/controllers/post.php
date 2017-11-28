<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('post_model');
	}
	public function index(){
		if ($this->session->has_userdata('logged_in')) {
			$userdata = $this->session->userdata('logged_in');
			switch ($userdata['type_name']) {
				case 'admin':
					$data['title'] = 'Announcements & Events';
					$data['active'] = 'home';
					$filter = $this->input->get('filter');
					$data['active_filter'] = $filter;
					$data['posts'] = $this->post_get($filter);
					$this->load->view('admin_dashboard_home',$data);
					break;
				case 'user':
					echo "this is user";
					break;
			}
		}
		else {
			$data['title'] = "Login";
			$this->load->view('authentication_login',$data);
		}
	}
	public function post_get($filter){
		return $this->post_model->post_get($filter);
	}
	public function post_view($id){
		$data['title'] = 'Announcements & Events';
		$data['active'] = 'home';
		$data['post'] = $this->post_model->post_view($id);
		$this->load->view('admin_dashboard_post_view',$data);
	}
	public function post_search($keyword){

	}
	public function post_add(){
		$data = array(
			'post_title'=>$this->input->post('post_title'),
			'post_when_start'=>$this->input->post('post_when_start'),
			'post_when_end'=>$this->input->post('post_when_end'),
			'post_body'=>$this->input->post('post_body'),
			'post_author'=>$this->session->userdata['logged_in']['account_id'],
			'post_type'=>$this->input->post('type'),
			'post_when_start'=>$this->input->post('post_when_start'),
			'post_when_end'=>$this->input->post('post_when_end')
		);
		if($this->post_model->post_add($data)){
			header('location:/');
		}
	}
	public function post_edit(){

	}
	public function post_delete($id){
		$this->post_model->post_delete($id);
	}
}
