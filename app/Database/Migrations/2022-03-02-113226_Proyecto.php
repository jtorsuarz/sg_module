<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proyecto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
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
            ],
            'fecha_inicio'          => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'fecha_fin'          => [
                'type'           => 'DATE',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('proyectos');
        
    }

    public function down()
    {
        $this->forge->dropTable('proyectos');
    }
}
