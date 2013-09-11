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
	public function login($username, $password){
		$this->db->select('id, username, password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);
		$query=$this->db->get();
		if ($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}
}