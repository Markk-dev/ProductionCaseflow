<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCriminalCasesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'case_type' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'case_priority' => [
                'type' => 'ENUM',
                'constraint' => ['High', 'Medium', 'Low'],
                'default' => 'Medium',
            ],
            'progress' => [
                'type' => 'ENUM',
                'constraint' => ['Incomplete', 'Complete'],
                'default' => 'Incomplete',
            ],
            'admin_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('admin_id', 'MainUser', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('criminal_cases');
    }

    public function down()
    {
        $this->forge->dropTable('criminal_cases');
    }
}
