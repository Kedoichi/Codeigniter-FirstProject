<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'date_of_birth' => [
                'type' => 'DATE',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'hired_date' => [
                'type' => 'DATE',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
