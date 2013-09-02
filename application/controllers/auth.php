<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller{
	public function register(){
		$this->load->model('user_model');
		$this->user_model->insert();
	}
}