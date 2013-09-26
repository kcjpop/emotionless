<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->model('portfolio_model');
		$this->load->model('user_info_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data=array();	
		$data['portfolio'] = $this->portfolio_model->get_top();
		$data['recent_post'] = $this->article_model->recent_post();
		$data['top_post'] = $this->article_model->get_top();
		$data['top_post']['created'] = new DateTime($data['top_post']['created']);
		$data['top_post']['modified'] = new DateTime($data['top_post']['modified']);
		$this->render('welcome/index', $data);
	}
}

