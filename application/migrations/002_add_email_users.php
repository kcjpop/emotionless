<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_email_users extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_column('users', array(
			'email' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255'
			)
		));
	}

	public function down()
	{
		$this->dbforge->remove_column('users', 'email');
	}
}