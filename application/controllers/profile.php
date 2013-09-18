<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('base/header');
		$this->load->view('profile');
		$this->load->view('base/footer');
	}
	public function pwd_change(){
		$this->load->view('base/header');
		$this->load->view('pwd_change');
		$this->load->view('base/footer');	
	}
	public function info_change(){
		$this->load->view('base/header');
		$this->load->view('info_change');
		$this->load->view('base/footer');
	}
	public function avatar_change(){
		$this->load->view('base/header');
		$this->load->view('avatar_change');
		$this->load->view('base/footer');
	}
}