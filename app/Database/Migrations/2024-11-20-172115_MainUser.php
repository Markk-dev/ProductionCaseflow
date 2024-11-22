<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MainUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default' => 'user',
            ],
            'is_verified' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'profile_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => 'placeholder.png',
            ]
            ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('MainUser');
    }

    public function down()
    {
        $this->forge->dropTable('MainUser');
    }
}
