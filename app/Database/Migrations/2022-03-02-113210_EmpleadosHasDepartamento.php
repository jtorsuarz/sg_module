<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmpleadosHasDepartamento extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_empleado'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'null'           => false,
            ],
            'id_departamento'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'null'           => false,
            ]
        ]);
        $this->forge->addForeignKey('id_empleado', 'empleados', 'id_empleado', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_departamento', 'departamentos', 'id_depart', 'CASCADE', 'CASCADE');
        $this->forge->createTable('empleado_has_departamentos');
    }

    public function down()
    {
        //
        $this->forge->dropTable('empleado_has_departamentos');
    }
}
