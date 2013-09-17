<?php 
/**
 * User Model
 *
 * @author An Cao <ping@ancaois.me>
 */
class User_model extends CI_Model
{
	protected $table = 'users';
	public function __construct()
	{
		parent::__construct();
		// Load the database
		$this->load->database();
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

	public function is_logged_in(){
		
	}

	/**
	 * Get a user by his/her ID
	 *
	 * @param  int $id 
	 *
	 * @return array
	 */
	public function get($id)
	{
		$this->db->where('id', (int) $id);
		return $this->db->get($this->table)->row_array();
	}

	/**
	 * Get all users in the database
	 *
	 * @return array
	 */
	public function gets()
	{
		return $this->db->get($this->table)->result_array();
	}

	/**
	 * Update a user information
	 *
	 * @param  array $data 
	 *
	 * @return void
	 */
	public function update($data)
	{
		$this->db->where('id', (int) $data['id']);
		return $this->db->update($this->table, $data);
	}

	/**
	 * Delete a user
	 *
	 * @param  int $id 
	 *
	 * @return void
	 */
	public function delete($id)
	{
		$this->db->where('id', (int) $id);
		return $this->db->delete($this->table);

	}
}