<?php

namespace App\Models;

use CodeIgniter\Model;

class VotersModel extends Model
{
    protected $table                = 'tb_voters';
    protected $primaryKey           = 'id_voters';
    protected $returnType           = 'object';
    protected $allowedFields        = ['kode_unik', 'nim_voters','name_voters', 'tahun_voters'];
    protected $useTimestamps        = true;

    
    public function search($keyword) 
    {
        return $this->table('tb_voters')->like('name_voters', $keyword)->orLike('tahun_voters', $keyword)->orLike('nim_voters', $keyword)->orLike('kode_unik', $keyword);  
    } 

    public function voters_list()
    {
        return $this->db->table('tb_voters')->countAll();
    }

}