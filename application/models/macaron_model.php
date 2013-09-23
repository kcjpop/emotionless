<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Macaron_model extends MY_Model
{
	public function get($id)	
	{
		$item = parent::get($id);
		// Create two thumbnails link
		$item = $this->format($item);
		return $item;
	}

	public function get_all()
	{
		$items = parent::get_all();
		$data = array();
		foreach ($items as $item)
		{
			$item = $this->format($item);
			$data[] = $item;
		}

		return $data;
	}

	/**
	 * Get other macarons
	 *
	 * @param  integer  $id    
	 * @param  integer $limit 
	 *
	 * @return void
	 */
	public function get_others($id)
	{
		$this->_database->where($this->primary_key.' !=', $id);
		$items = $this->_database->get($this->_table)
			->{$this->_return_type(TRUE)}();

		$data = array();
		foreach ($items as $item)
		{
			$item = $this->format($item);
			$data[] = $item;
		}

		return $data;
	}

	/**
	 * Search macaron
	 *
	 * @param  string $q 
	 *
	 * @return array
	 */
	public function search($q)
	{
		$this->_database->like('name', $q, 'both');
		$items = $this->_database->get($this->_table)
			->{$this->_return_type(TRUE)}();

		$data = array();
		foreach ($items as $item)
		{
			$item = $this->format($item);
			$data[] = $item;
		}

		return $data;
	}

	private function format($item)
	{
		// Generate thumbnail URLs
		$pivot = strpos($item['image'], '.');
		$file_name = substr($item['image'], 0, $pivot);
		$file_ext  = substr($item['image'], $pivot);
		
		$item['small_image'] = site_url('uploads/'.$file_name.'_small_thumb'.$file_ext);
		$item['big_image'] = site_url('uploads/'.$file_name.'_big_thumb'.$file_ext);

		// Convert boolean
		$item['is_hot'] = ((int) $item['is_hot'] === 1);

		// Generate URL
		$item['url'] = site_url('macaron/view/'.$item['id'].'-'.strtolower(url_title($item['name'])));

		return $item;
	}
}