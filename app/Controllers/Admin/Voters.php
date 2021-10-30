<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VotersModel; 

class Voters extends BaseController
{

    
    protected $voters;
    public function __construct()
    {
        $this->voters = new VotersModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->voters->search($keyword);
        } else {
            $this->voters;
        }

        $data = [
            'voters' => $this->voters->paginate(25, 'tb_voters'),
            'pager' => $this->voters->pager,
            'nomor' => nomor($this->request->getVar('page_tb_voters'), 25),
        ];

        return view('admin/voters', $data);
    }

}