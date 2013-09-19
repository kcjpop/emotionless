<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{
	public function index()
	{
		$this->render('admin/dashboard/index');
	}
}