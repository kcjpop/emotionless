
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('contact');
		$this->load->view('base/footer');	
	}
}