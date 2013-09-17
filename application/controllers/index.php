<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Try to auto-login
		if ($this->input->cookie('remember_me') === TRUE && $this->users_model->is_logged_in() === FALSE)
		{
			$this->users_model->login($username, $password);
		}

		$this->load->view('base/header');
		$this->load->view('index');
		$this->load->view('base/footer');
	}
}

