<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableContacts extends Migration
{
	protected $table = 'contacts';

	public function up()
	{
		$this->forge->addField([
			'id'         => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => true,
			],
			'email'      => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'subject'    => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'message'    => [
				'type' => 'TEXT',
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable($this->table);
	}

	public function down()
	{
		$this->forge->dropTable($this->table, true);
	}
}
