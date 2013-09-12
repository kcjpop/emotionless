<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{
	public function index()
	{
		$this->load->library('migration');
		if (!$this->migration->current())
		{
			show_error($this->migration->error_string());
		}
		echo 'Current version: ' . $this->migration->current();
		echo '<br />';
		echo 'Latest version: ' . $this->migration->latest();
	}
}