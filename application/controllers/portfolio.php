<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {
	public function index()
	{
		$data = array();
		$this->load->model('portfolio_model');
		$data['items'] = $this->portfolio_model->gets();
		$this->render('portfolio/index',$data);
	}
	
	public function view($id)
	{
		$data = array();
		$this->load->model('user_info_model');
		$data = $this->user_info_model->get($id);
		$this->render('portfolio/view',$data);
	}
}