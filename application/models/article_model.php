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
}