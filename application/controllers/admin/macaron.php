<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Macaron extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('macaron_model');
	}

	/**
	 * Display all macaron in the site
	 *
	 * @return void
	 */
	public function index()
	{
		$this->tpl->items = $this->macaron_model->as_array()->get_all();
		$this->tpl->build('admin/macaron/index');
	}

	/**
	 * Show the form to create or edit macaron
	 *
	 * @param  int $id 
	 *
	 * @return void
	 */
	public function form($id = '')
	{
		// Default value
		$this->tpl->item = array(
			'id'          => '',
			'name'        => '',
			'description' => '',
			'image'       => '',
			'is_hot'      => 0,
		);
		if (!empty($id))
		{
			$this->tpl->item = $this->macaron_model->as_array()->get($id);
		}

		if ($this->is_post())
		{
			// Set form validation
			$this->load->library('form_validation');
			$this->form_validation->set_rules(
				'name',
				'Name',
				'required|trim|xss_clean'
			);

			if ($this->form_validation->run() !== FALSE)
			{
				$now = new DateTime();
				$item = array(
					'name'        => $this->input->post('name'),
					'description' => $this->input->post('description'),
					'image'       => $this->input->post('image'),
					'is_hot'      => (int) $this->input->post('is_hot'),
					'modified'    => $now->format(DateTime::ISO8601)
				);

				if (!empty($id))
				{
					$this->macaron_model->update($id, $item);
				}
				else
				{
					$item['created'] = $now->format(DateTime::ISO8601);
					$this->macaron_model->insert($item);
				}

				redirect(admin_url('macaron'));
			}
		}

		$this->tpl->build('admin/macaron/form');
	}

	/**
	 * Delete a macaron
	 *
	 * @param  int $id 
	 *
	 * @return void
	 */
	public function delete($id)
	{
		$id = (int) $id;
		$this->macaron_model->delete($id);
		redirect(admin_url('macaron'));
	}
}