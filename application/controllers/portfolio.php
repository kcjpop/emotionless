<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {
	public function index()
	{
		$this->render('portfolio/index');
	}
}