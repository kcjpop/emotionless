<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller
{
	/**
	 * Show the list of all users in database with options to edit/delete
	 *
	 * @return void
	 */
	public function index()
	{
		// Array contains data to be passed to view
		$data = array();

		$this->load->model('user_model');
		$data['users'] = $this->user_model->gets();
		$this->render('admin/user/index', $data);
	}
	public function delete($id)
	{
		$this->load->model('user_model');
		$this->user_model->delete($id);
		redirect(admin_url('user'),'refresh');
	}
}