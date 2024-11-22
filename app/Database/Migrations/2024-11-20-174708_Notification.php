<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notification extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'case_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'is_read' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'mainuser', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('case_id', 'criminal_cases', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('notifications');
    }

    public function down()
    {
        $this->forge->dropTable('notifications');
    }
}
