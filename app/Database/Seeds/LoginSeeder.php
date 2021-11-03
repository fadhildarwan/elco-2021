<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name_admin' => 'Admin',
                'username' => 'admin',
                'password' => password_hash('Terlama22%', PASSWORD_BCRYPT),
            ],
            [
                'name_admin' => 'Elco Committe',
                'username' => 'elco',
                'password' => password_hash('Elco%21', PASSWORD_BCRYPT),
            ],
            [
                'name_admin' => 'IT Elco',
                'username' => 'itelco',
                'password' => password_hash('Itelco%%', PASSWORD_BCRYPT),
            ],

        ];

        $this->db->table('tb_login')->insertBatch($data);
    }
}
