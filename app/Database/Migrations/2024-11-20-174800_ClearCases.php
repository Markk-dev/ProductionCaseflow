<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClearedCases extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'case_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'cleared_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('case_id', 'criminal_cases', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('cleared_by', 'mainuser', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cleared_cases');
    }

    public function down()
    {
        $this->forge->dropTable('cleared_cases');
    }
}
