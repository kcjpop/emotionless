<?php 
/**
 * User Model
 *
 * @author An Cao <ping@ancaois.me>
 */
class User_info_model extends MY_Model
{
	protected $table = 'users_info';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function check_id($id)
	{
		$this->db->select('id');
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query=$this->db->get();
		if ($query->num_rows()==0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}