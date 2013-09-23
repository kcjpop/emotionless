<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model
{
	protected $table = 'articles';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($data)
	{
		$now = new DateTime();
		// Check if the data has `created` and `modified` fields
		// If not, use the current date time
		if (!isset($data['created']))
		{
			$data['created'] = $now->format(DateTime::ISO8601);
		}

		if (!isset($data['modified']))
		{
			$data['modified'] = $now->format(DateTime::ISO8601);
		}		

		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function gets()
	{
		return $this->db->get($this->table)->result_array();
	}
}