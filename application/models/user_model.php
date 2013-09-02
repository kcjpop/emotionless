<?php 
class User_model extends CI_Model
{
	protected $table = 'users';

	public function __construct()
	{
		// Database is already loaded in all model classes
		parent::__construct();
	}

	/**
	 * Insert new record to database
	 *
	 * @return array
	 */
	public function insert($data)
	{
		// Simple, huh?
		$this->db->insert($this->table, $data);
	}
}