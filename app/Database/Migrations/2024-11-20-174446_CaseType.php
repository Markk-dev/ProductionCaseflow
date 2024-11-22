<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CaseType extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
        ]);

        // Add the primary key for the 'id' column
        $this->forge->addPrimaryKey('id');


        $this->forge->createTable('case_types');
    }

    public function down()
    {
        $this->forge->dropTable('case_types');
    }
}
