<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_is_admin_users extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_column('users', array(
			'is_admin' => array(
				'type'       => 'TINYINT',
				'constraint' => '1'
			)
		));
	}

	public function down()
	{
		$this->dbforge->remove_column('users', 'is_admin');
	}
}