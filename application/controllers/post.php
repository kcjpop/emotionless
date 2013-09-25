<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	public function index()
	{
		$data=array();	
		$data['all_post'] = $this->article_model->recent_post();
		$data['recent_post'] = $this->article_model->recent_post();
		$this->render('post/index',$data);
	}
	public function view($id)
	{
		$data=array();
		$data['post'] = $this->article_model->get($id);
		$data['post']['created'] = new DateTime($data['post']['created']);
		$data['post']['modified'] = new DateTime($data['post']['modified']);
		$data['recent_post'] = $this->article_model->recent_post();
		$this->render('post/view', $data);
	}
}