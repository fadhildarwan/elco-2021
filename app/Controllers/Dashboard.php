<?php

namespace App\Controllers;
use App\Models\ResultModel; 
use App\Models\VotersModel;

class Dashboard extends BaseController
{
    protected $result;
    protected $voters;
    public function __construct()
    {
        $this->result = new ResultModel();
        $this->voters = new VotersModel();

    }

    public function index()
    {

        $data = [
            'result_id' => $this->result->result_id(), 
            'result_all' => $this->result->result_all(),  
            
            'voters_list' => $this->voters->voters_list(), 
            
            'persen' => '100',
        ];
    
        return view('dashboard', $data);
    }
}