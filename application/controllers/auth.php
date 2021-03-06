<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function register()
	{
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|min_length[5]|max_length[16]|is_unique[users.username]|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|min_length[6]|max_length[16]|matches[password-retype]|trim|xss_clean|md5|'
		);
		$this->form_validation->set_rules(
			'password-retype',
			'Confirm password',
			'required|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email|is_unique[users.email]|trim|xss_clean'
		);
		
		if ($this->form_validation->run() !== FALSE)
		{
			$this->load->model('user_model');
			// Collect input data and insert into database
			$id=$this->user_model->insert(array(
				'username'        => $this->input->post('username', TRUE),	
				'password'        => $this->input->post('password',TRUE),
				'email'           => $this->input->post('email', TRUE)
			));
			$this->load->model('user_info_model');
			$this->user_info_model->insert(array(
				'id'=>$id
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
	public function login()
	{
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->dbCheck($username, $password);
		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url());
		}
		else
		{
			redirect(site_url() , 'refresh');
		}
	}
	public function dbCheck($username, $password)
	{
		$this->load->model('user_model');
		$result = $this->user_model->login($username, $password);
		if ($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' 		=> $row->id,
					'username' 	=> $row->username,
					'is_admin' 	=> $row->is_admin
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}
		else
		{
			$this->form_validation->set_message('dbCheck', 'Invalid username or password');
			return false;
		}
	}
	public function update_pwd()
	{
		$this->form_validation->set_rules(
			'password-old',
			'Old Password',
			'required|min_length[6]|max_length[16]|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'password-new',
			'New Password',
			'required|min_length[6]|max_length[16]|matches[password-new-retype]|trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'password-new-retype',
			'New Password Retype',
			'required|min_length[6]|max_length[16]|trim|xss_clean'
		);
		if ($this->form_validation->run()!==FALSE)
		{
			$this->load->model('user_model');
			$id=$this->user_model->get_id();
			$this->user_model->update(array(
				'id'				=> $id,
				'password'			=> md5($this->input->post('password-new'))
			));
			redirect(site_url('auth/success'));
		}
		else
		{
			echo validation_errors();
		}
	}
	
	public function update_info()
	{
		$this->form_validation->set_rules(
			'fullname',
			'Full Name',
			'trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'workplace',
			'Workplace',
			'trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'address',
			'Address',
			'trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'tel',
			'Tel',
			'trim|xss_clean'
		);
		$this->form_validation->set_rules(
			'note',
			'Note',
			'trim|xss_clean'
		);
		if ($this->form_validation->run() !== FALSE)
		{
			$this->load->model('user_info_model');
			$this->user_info_model->update(array(
				'id'				=> $this->user_info_model->get_id(),
				'fullname'			=> $this->input->post('fullname', TRUE),	
				'workplace'			=> $this->input->post('workplace',TRUE),
				'address'   		=> $this->input->post('address', TRUE),
				'tel'				=> $this->input->post('tel',TRUE),
				'dob'				=> $this->input->post('dob_year', TRUE).'-'.$this->input->post('dob_month', TRUE).'-'.$this->input->post('dob_day', TRUE),
				'sex'				=> $this->input->post('sex',TRUE),
				'class'				=> $this->input->post('class',TRUE),
				'note'				=> $this->input->post('note', TRUE)
			));
			redirect(site_url('auth/success'));
		}
		else
		{
			echo validation_errors();
		}
	}

	public function send_request()
	{
		$this->load->model('user_info_model');
		$id=$this->user_info_model->get_id();
		$this->user_info_model->update(array(
			'id'			=> $id,
			'is_sent'		=> '1'
		));
		$data['user_info'] = $this->user_info_model->get($id);
		$this->load->model('portfolio_model');
		if ($this->portfolio_model->check_id($id)==FALSE)
		{
			$this->portfolio_model->insert(array(
				'id'			=> $id
				));
		}
		$this->portfolio_model->update(array(
			'id'			=> $id,
			'fullname'		=> $data['user_info']['fullname'],
			'class'			=> $data['user_info']['class'],
			'note'			=> $data['user_info']['note'],
			'avatar'		=> $data['user_info']['avatar']
		));
		redirect(site_url('profile'));
	}

	public function success()
	{
		$this->load->view('profile/success');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(site_url(),'refresh');
	}
}