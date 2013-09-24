<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Since we are using this model frequently, put it here for autoloading
		$this->load->model('article_model');
	}

	/**
	 * Dispaly all articles in database
	 *
	 * @return void
	 */
	public function index()
	{
		$data = array();

		// Display all articles in database
		$data['items'] = $this->article_model->gets();

		$this->render('admin/news/index', $data);
	}

	public function form()
	{
		$data = array();
		// Load the validation library
		$this->load->library('form_validation');
		// If users submit the form
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			// Set the rules and validate
			$this->form_validation->set_rules(
				'title',
				'Title',
				'required|trim|xss_clean'
			);

			$this->form_validation->set_rules(
				'content',
				'Content',
				'required|trim|xss_clear'
			);

			if ($this->form_validation->run() === TRUE)
			{
				// Data is OK
				$this->article_model->insert(array(
					'title'   => $this->input->post('title'),
					'content' => $this->input->post('content')
				));

				// Redirect to the main page
				redirect(admin_url('news'));
			}
			else
			{
				// Well well, some errors
				$data['validation_errors'] = validation_errors();
			}
		}

		// Show the form to user
		$this->render('admin/news/form', $data);
	}
}