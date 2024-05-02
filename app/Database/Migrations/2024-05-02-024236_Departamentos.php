<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departamentos extends Migration
{
    public function up()
    {
        $this->forge->AddField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'descripcion' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id',  true);
        $this->forge->createTable('departamentos');
    }

    public function down()
    {
        $this->forge->dropTable('departamentos');
        
    }
}
