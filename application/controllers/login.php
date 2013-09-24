<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->input->post('rmb-me'))
		{
			$this->cookie();
		}

		$this->dbCheck($username, $password);
		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url());
		}
		else
		{
			redirect(site_url() , 'refresh');
		}
	}

	public function dbCheck($username, $password)
	{
		$result = $this->user_model->login($username, $password);
		if ($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}
		else
		{
			$this->form_validation->set_message('dbCheck', 'Invalid username or password');
			return false;
		}
	}

	public function cookie()
	{
		$cookie_username = array(
			'name' => 'username',
			'value' => $this->input->post('username') ,
			'expire' => '30'
		);
		$cookie_password = array(
			'name' => 'password',
			'value' => md5($this->input->post('password')) ,
			'expire' => '30'
		);
		$cookie_rmb_me = array(
			'name' => 'rmb_me',
			'value' => 'true',
			'expire' => '30'
		);
		$this->input->set_cookie($cookie_username);
		$this->input->set_cookie($cookie_password);
		$this->input->set_cookie($cookie_rmb_me);
	}
}
