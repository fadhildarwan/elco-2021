<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table                = 'tb_login';
    protected $primaryKey           = 'id_login';
    protected $returnType           = 'object';
    protected $allowedFields        = ['name_admin', 'username', 'password'];
    protected $useTimestamps        = true;
    protected $updatedField         = false;
    
}