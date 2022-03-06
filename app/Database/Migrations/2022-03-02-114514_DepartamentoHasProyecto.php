<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DepartamentoHasProyecto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_departamento'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'null'           => false,
            ],
            'id_proyecto'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'null'           => false,
            ]
        ]);
        $this->forge->addForeignKey('id_departamento', 'departamentos', 'id_depart', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_proyecto', 'proyectos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('departamento_has_proyectos');

    }

    public function down()
    {
        $this->forge->dropTable('departamento_has_proyectos');
    }
}
