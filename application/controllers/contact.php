
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function index()
	{
		$this->load->model('article_model');
		$data['recent_post'] = $this->article_model->recent_post();
		$this->render('contact/index',$data);
	}
}