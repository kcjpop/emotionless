<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Macaron extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('macaron_model');
	}

	public function index()
	{	
		$this->tpl->items = $this->macaron_model->as_array()->get_all();
		$this->tpl->build('macaron/index');
	}

	/**
	 * View a macaron
	 *
	 * @param  string $slug 
	 *
	 * @return void
	 */
	public function view($slug = '')
	{
		$slug = explode('-', $slug);
		if (empty($slug))
		{
			redirect(site_url('macaron'));
		}
		
		$id = (int) $slug[0];
		$item = $this->macaron_model->as_array()->get($id);
		if (empty($item))
		{
			redirect(site_url('macaron'));
		}

		// Macaron detail
		$this->tpl->item = $item;

		// Other macarons
		$this->tpl->others = $this->macaron_model->as_array()->limit(10)->get_others($id);
		$this->tpl->build('macaron/view');
	}
}