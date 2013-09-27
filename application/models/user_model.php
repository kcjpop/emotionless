<?php 
/**
 * User Model
 *
 * @author An Cao <ping@ancaois.me>
 */
class User_model extends MY_Model
{
	protected $table = 'users';
	public function login($username, $password)
	{
		$this->db->select('id, username, password, is_admin');
		$this->db->from($this->table);
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);
		$query=$this->db->get();
		if ($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function is_admin()
	{
		$session = $this->session->userdata('logged_in');
		return $session['is_admin'];
	}
	public function is_logged_in()
	{
		if ($this->session->userdata('logged_in')){
            return true;
        }
        return false;
	}
}