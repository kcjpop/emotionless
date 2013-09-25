<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->render('profile/index');
	}

	public function update_pwd()
	{
		$this->render('profile/update_pwd');
	}

	public function update_info()
	{
		$this->render('profile/update_info');
	}

	public function update_avatar()
	{
		$this->render('profile/update_avatar');
	}
	public function send_request()
	{
		$this->render('profile/send_request');
	}
}