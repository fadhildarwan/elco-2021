<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vote extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_vote'           => [
                    'type'           => 'INT',
                    'constraint'     => 4,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',                
            'kode_unik'          => [
                    'type'           => 'CHAR',
                    'constraint'     => 5,
            ],
            'vote'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => 25,
                    'null'       => true,
            ],                

    ]);
    $this->forge->addKey('id_vote', true);
    $this->forge->createTable('tb_vote');
    }

    public function down()
    {
        $this->forge->dropTable('tb_vote');
    }
}
