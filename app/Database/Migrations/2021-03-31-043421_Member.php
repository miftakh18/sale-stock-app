<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_member'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'telepon' => [
				'type' => 'INT',
				'constraint' => '100',
			],
			'alamat'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('member');
	}

	public function down()
	{
		$this->forge->dropTable('member');
	}
}
