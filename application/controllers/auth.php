<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function register()
	{
		// Load the Validation library
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'password-retype',
			'Confirm password',
			'required|trim|xss_clean|matches[password]'
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email|trim|xss_clean'
		);

		if ($this->form_validation->run() !== FALSE)
		{
			$this->load->model('user_model');
			// Collect input data and insert into database
			$this->user_model->insert(array(
				'username'        => $this->input->post('username', TRUE),
				'password'        => $this->input->post('password',TRUE),
				'password_retype' => $this->input->post('password-retype', TRUE),
				'email'           => $this->input->post('email', TRUE)
			));

			// @todo: Display success message

			// Redirect to home page
			redirect(site_url());
		}
		else
		{
			// Display error messages
			// @todo: Display error message in the form
			echo validation_errors();
		}

	}
}