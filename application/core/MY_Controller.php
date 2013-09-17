<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

/**
 * Base class for all admin controllers
 */
class Admin_Controller extends MY_Controller
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}
}