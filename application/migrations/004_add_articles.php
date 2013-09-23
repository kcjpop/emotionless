<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_articles extends CI_Migration
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
			'title' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255'
			),
			'content' => array(
				'type' => 'TEXT'
			),
			'created' => array(
				'type' => 'DATETIME'
			),
			'modified' => array(
				'type' => 'DATETIME'
			)
		));
		// Add PRIMARY KEY
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('articles');
	}

	/**
	 * Down
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_table('articles');
	}
}