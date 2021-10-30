<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_login'           => [
                     'type'           => 'INT',
                     'constraint'     => 4,
                     'unsigned'       => true,
                     'auto_increment' => true,
             ],
             'name_admin'          => [
                 'type'           => 'VARCHAR',
                 'constraint'     => 65,
             ],
             'username'          => [
                 'type'           => 'VARCHAR',
                 'constraint'     => 65,
             ],
             'password'         => [
                 'type'           => 'VARCHAR',
                 'constraint'     => 225,
             ],
             'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',               
             'updated_at'        => [
                'type'           => 'DATETIME',
                'null'           => true,                
            ],
 
     ]);
     $this->forge->addKey('id_login', true);
     $this->forge->createTable('tb_login');
    }

    public function down()
    {
        $this->forge->dropTable('tb_login');
    }
}
