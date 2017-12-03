<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
public function index() {
	$this->load->view('sample_view');
}
}
