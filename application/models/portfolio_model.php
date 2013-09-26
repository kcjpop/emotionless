<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends MY_Model
{
	protected $table = 'portfolios';

	public function get_top()
	{
		$this->db->order_by('id','desc');
		$this->db->select('id,fullname,class,note,avatar');
		$this->db->from($this->table);
		$this->db->where('is_top','1');
		$this->db->limit(3);
		$query=$this->db->get();
		if ($query->num_rows()<=3)
		{
			return $query->result_array();
		}
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