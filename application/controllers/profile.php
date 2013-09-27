<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->render('profile/index');
	}

	public function update_pwd()
	{
		$this->render('profile/update_pwd');
	}

	public function update_info()
	{
		$data = array();
		$this->load->model('user_info_model');
		$id = $this->user_info_model->get_id();
		if ($this->user_info_model->check_id($id)==TRUE)
		{
			$data['user_info'] = $this->user_info_model->get($id);
		}
		$this->render('profile/update_info',$data);
	}

	public function update_avatar()
	{
		$data = array();
		$this->load->model('user_info_model');
		$data['user_info'] = $this->user_info_model->get($this->user_info_model->get_id());
		$this->render('profile/update_avatar', $data);
	}
	public function send_request()
	{
		$this->render('profile/send_request');
	}
	public function account()
	{
		$this->render('profile/account');
	}
	public function security()
	{
		$this->render('profile/security');
	}
}