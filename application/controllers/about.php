
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {
public function index()
	{
		$this->load->view('base/header');
		$this->load->view('about');
		$this->load->view('base/footer');	
	}
}