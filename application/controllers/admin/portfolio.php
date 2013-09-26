<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$this->load->model('portfolio_model');
		$data['items'] = $this->portfolio_model->gets();
		$this->render('admin/portfolio/index',$data);
	}

	public function accept($id)
	{
		$this->load->model('portfolio_model');
		$this->portfolio_model->update(array(
			'id'				=> $id,
			'is_accepted'		=> '1'
		));
		redirect(admin_url('portfolio'),'refresh');
	}

	public function unaccept($id)
	{
		$this->load->model('portfolio_model');
		$this->portfolio_model->update(array(
			'id'				=> $id,
			'is_accepted'		=> '0'
		));
		redirect(admin_url('portfolio'),'refresh');
	}

	public function set_top($id)
	{
		$this->load->model('portfolio_model');
		$this->portfolio_model->update(array(
			'id'				=> $id,
			'is_top'		=> '1'
		));
		redirect(admin_url('portfolio'),'refresh');
	}

	public function unset_top($id)
	{
		$this->load->model('portfolio_model');
		$this->portfolio_model->update(array(
			'id'				=> $id,
			'is_top'		=> '0'
		));
		redirect(admin_url('portfolio'),'refresh');
	}

	public function delete($id)
	{
		$this->load->model('portfolio_model');
		$this->portfolio_model->delete($id);
		redirect(admin_url('portfolio'),'refresh');
	}
}