<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends MY_Model
{
	protected $table = 'articles';

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

		return parent::insert($data);
	}
	public function get_top_id()
	{
		$this->db->select('id');
		$this->db->from($this->table);
		$this->db->where('is_top','1');
		$this->db->limit(1);
		$query=$this->db->get();
		if ($query->num_rows()==1)
		{
			$data=$query->row_array();
			return $data['id'];
		}
	}

	public function get_top()
	{
		$this->db->select('title, content, created ,modified');
		$this->db->from($this->table);
		$this->db->where('is_top','1');
		$this->db->limit(1);
		$query=$this->db->get();
		if ($query->num_rows()==1)
		{
			return $query->row_array();
		}
	}

	public function recent_post()
	{
		$this->db->order_by('id','desc');
		$this->db->select('id, title');
		$this->db->from($this->table);
		$query=$this->db->get();
		return $query->result_array();
	}
}