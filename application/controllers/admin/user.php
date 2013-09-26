<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller
{
	/**
	 * Show the list of all users in database with options to edit/delete
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$data=array();
	}
	public function index()
	{
		$data['users'] = $this->user_model->gets();
		$this->render('admin/user/index', $data);
	}
	public function info($id)
	{
		$this->load->model('user_info_model');
		$data['user_info']=$this->user_info_model->get($id);
		$data['user']=$this->user_model->get($id);
		$this->render('admin/user/info', $data);
	}
	public function delete($id)
	{
		$this->load->model('user_model');
		$this->user_model->delete($id);
		redirect(admin_url('user'),'refresh');
	}
}