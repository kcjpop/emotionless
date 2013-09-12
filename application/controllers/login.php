<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model','',TRUE);
	}
	public function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|trim|xss_clean'	
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|xss_clean|callback_dbCheck'
		);
		if ($this->form_validation->run()==FALSE){
			redirect(site_url());
		}
		else{
			redirect(site_url(),'refresh');
		}
	}
	public function dbCheck($password){
		$username=$this->input->post('username');
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
		else{
			$this->form_validation->set_message('dbCheck', 'Invalid username or password');
			return false;
		}
	}
}