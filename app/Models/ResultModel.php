<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultModel extends Model
{
    protected $table                = 'tb_vote';
    protected $primaryKey           = 'id_vote';
    protected $returnType           = 'object';
    protected $allowedFields        = ['kode_unik', 'vote'];
    protected $useTimestamps        = true;
    protected $updatedField         = false;

    
    public function search($keyword) 
    {
        return $this->table('tb_vote')->like('vote', $keyword)->orLike('kode_unik', $keyword); 
    } 

    public function result_id()
    {
        return $this->db->table('tb_vote')->like('id_vote')->countAllResults();
    }

    public function result_vote()
    {
        return $this->db->table('tb_vote')->like('vote')->countAllResults();
    }

    public function result_all()
    {
        return $this->db->table('tb_vote')->countAll();
    }
}