
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('register');
		$this->load->view('base/footer');	
	}
}