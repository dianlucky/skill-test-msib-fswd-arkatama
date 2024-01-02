<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataDiri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'age' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'   => 'DATETIME',
                'NULL'   => true,
            ],
            'updated_at' => [
                'type'   => 'DATETIME',
                'NULL'   => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
