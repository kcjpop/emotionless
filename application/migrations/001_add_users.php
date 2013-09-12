<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{
	/**
	 * Up
	 *
	 * @return void
	 */
	public function up()
	{
		// Add fields
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			),
			'password' => array(
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			),
		));
		// Add PRIMARY KEY
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}

	/**
	 * Down
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}