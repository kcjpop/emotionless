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
}