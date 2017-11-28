<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('authentication_model');
	}
	public function index(){
		if ($this->session->has_userdata('logged_in')) {
			$userdata = $this->session->userdata('logged_in');
			switch ($userdata['type_name']) {
				case 'admin':
					$data['active'] = 'home';
					$data['active_filter'] = $this->input->get('filter');
					$data['posts'] = $this->
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
	public function authentication_login(){
		if(!$this->input->post()){
			$data['title'] = "Login";
			$this->load->view('authentication_login',$data);
		}
		else{
			$data = array(
				'account_username'=>$this->input->post('username'),
				'account_password'=>$this->input->post('password')
			);
			if ($this->authentication_model->authentication_login($data)) {
				header('location:/');

			}
			else{
				echo "Nothing";
				header('location:/');
			}
		}
	}
	public function authentication_logout(){
		$this->session->unset_userdata('logged_in');
		header('location:/login');
	}
	public function authentication_register(){

	}
}
