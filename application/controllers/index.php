<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Try to auto-login
		$this->load->model('user_model');
		if ($this->input->cookie('rmb_me')==TRUE && $this->user_model->is_logged_in()==FALSE)
		{
			$username=$this->input->cookie('username');
			$password=$this->input->cookie('password');
			$result=$this->user_model->login($username, $password);
			if ($result){
				$sess_array=array();
				foreach($result as $row){
					$sess_array=array(
						'id'=>$row->id,
						'username'=>$row->username
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return true;
			}
		}
		$this->render('welcome/index');
	}
}

