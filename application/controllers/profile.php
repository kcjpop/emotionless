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
	public function pwdChange(){
		$this->load->view('base/header');
		$this->load->view('pwdChange');
		$this->load->view('base/footer');	
	}
	public function infoChange(){
		$this->load->view('base/header');
		$this->load->view('infoChange');
		$this->load->view('base/footer');
	}
	public function avatarChange(){
		$this->load->view('base/header');
		$this->load->view('avatarChange');
		$this->load->view('base/footer');
	}
}