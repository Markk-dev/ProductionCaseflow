<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CaseParticipants extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('case_id', 'criminal_cases', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'mainuser', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('case_participants');
    }

    public function down()
    {
        $this->forge->dropTable('case_participants');
    }
}
