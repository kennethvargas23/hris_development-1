<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {

	public function index(){
		if ($this->session->has_userdata('logged_in')) {
			$userdata = $this->session->userdata('logged_in');
			switch ($userdata['credential_type']) {
				case 'admin':
					echo "this is admin";
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
	public function load_get(){

	}
	public function load_view(){

	}
	public function load_search(){

	}
	public function load_add(){

	}
	public function load_edit(){

	}
}
