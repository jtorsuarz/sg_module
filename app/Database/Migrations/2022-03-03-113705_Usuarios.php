<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'auto_increment' => true,
                'null'           => false,
            ],
            'usuario'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'password'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'id_empleado'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_empleado', 'empleados', 'id_empleado', 'CASCADE', 'CASCADE');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        //
        $this->forge->dropTable('usuarios');
    }
}
