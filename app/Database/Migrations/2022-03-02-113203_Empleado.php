<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empleado extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_empleado'          => [
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
            'apellido'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'dni'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'fecha_nacimiento'          => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'id_permiso'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'null'           => true,
            ],
            'salario_bruto'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'null'           => true,
            ],
            'fehca_inicio_vacaciones'          => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'fehca_fin_vacaciones'          => [
                'type'           => 'DATE',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_empleado', true);
        $this->forge->createTable('empleados');
    }

    public function down()
    {
        //
        $this->forge->dropTable('empleados');
    }
}
