<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableComplaint extends Migration
{public function up()
	{
			$this->forge->addField([
					'id'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => TRUE,
							'auto_increment' => TRUE
					],
					'place'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
					],
					'complaint'       => [
						'type'           => 'TEXT',
						'constraint'     => '255',
					],
					'user_id'       => [
						'type'           => 'INT',
						'constraint'     => 5,
						'unsigned'       => TRUE,
					]
			]);
			$this->forge->addKey('id', TRUE);
			$this->forge->addForeignKey('user_id','users','id');
			$this->forge->createTable('complaint');
	}

	public function down()
	{
			$this->forge->dropTable('complaint');
	}
}