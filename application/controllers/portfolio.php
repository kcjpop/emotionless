
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {
public function index()
	{
		$this->load->view('base/header');
		$this->load->view('portfolio');
		$this->load->view('base/footer');	
	}
}