<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{
	public function index()
	{
		$this->load->view('base/admin_header');
		$this->load->view('base/admin_footer');
	}
}