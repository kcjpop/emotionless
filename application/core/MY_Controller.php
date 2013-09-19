<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $base_header = 'base/header';
	protected $base_footer = 'base/footer';

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Render the base view
	 *
	 * @param  string  $view_name 
	 * @param  array   $data      
	 * @param  boolean $return    
	 *
	 * @return string
	 */
	protected function render($view_name, $data = array(), $return = FALSE)
	{
		$view  = $this->load->view($this->base_header, NULL, TRUE);
		$view .= $this->load->view($view_name, $data, TRUE);
		$view .= $this->load->view($this->base_footer, NULL, TRUE);
		
		if ($return === TRUE)
		{
			return $view;
		}
		echo $view;
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

		$this->base_header = 'base/admin_header';
		$this->base_footer = 'base/admin_footer';
	}
}