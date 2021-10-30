<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Voters extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_voters'           => [
                    'type'           => 'INT',
                    'constraint'     => 4,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'kode_unik'         => [
                'type'           => 'CHAR',
                'constraint'     => 5,
            ],
            'nim_voters'          => [
                    'type'           => 'CHAR',
                    'constraint'     => 18,
            ],
            'name_voters'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => 100,
            ],
            'tahun_voters' => [
                    'type' => 'year',
            ],
    ]);
    $this->forge->addKey('id_voters', true);
    $this->forge->createTable('tb_voters');
    }

    public function down()
    {
        $this->forge->dropTable('tb_voters');
    }
}
