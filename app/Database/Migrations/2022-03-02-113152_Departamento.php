<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departamento extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_depart'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'auto_increment' => true,
                'null'           => false,
            ],
            'nombre'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'descripcion'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ]
        ]);
        $this->forge->addKey('id_depart', true);
        $this->forge->createTable('departamentos');
    }

    public function down()
    {
        //
        $this->forge->dropTable('departamentos');
    }
}
