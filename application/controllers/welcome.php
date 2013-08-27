<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('index');
		$this->load->view('base/footer');
	}
}

