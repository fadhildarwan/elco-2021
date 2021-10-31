<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ResultModel; 
use App\Models\VotersModel;

class Result extends BaseController
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
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->result->search($keyword);
        } else {
            $this->result;
        }


        $data = [
            'result' => $this->result->paginate(25, 'tb_vote'),
            'pager' => $this->result->pager,
            'nomor' => nomor($this->request->getVar('page_tb_vote'), 25),
            'result_paslon' => $this->result->select('vote, COUNT(*) as jumlah')->groupBy('vote')->get(),
            // 'result_paslon' => $this->result->select('vote, COUNT(*) as jumlah')->groupBy('vote')->get(),
            // 'result_blank' => $this->result->select('vote, COUNT(*) as jumlah')->where('vote="blank"')->get(),
            'result_id' => $this->result->result_all(),
            'voters_list' => $this->voters->voters_list(),
            'persen' => '100',   
        ];

        return view('admin/result', $data);
    }

    public function vote()
    {
        return view('vote');
    }

    public function save()
    {
        //validasi input
        if(!$this->validate([
            'kode_unik' => [
                'rules'     => 'required|is_unique[tb_vote.kode_unik]|in_list[danger]',
                'errors' => [
                        'required' => 'Kode Unik tidak boleh kosong',
                        'is_unique' => 'Anda telah melakukan pemilihan',
                        'is_not_unique' => 'Anda tidak terdaftar sebagai pemilih',
                        'in_list'  => 'Anda baru bisa memilih pukul 08.00 WIB pada tanggal 1-3 November 2021',
                        
                    ]
            ],
            'vote' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vote tidak boleh kosong',
                ]
            ],
            
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();

        } else {
            $this->result->save([
                'kode_unik' => $this->request->getVar('kode_unik'),
                'vote' => $this->request->getVar('vote')
            ]);

            session()->setFlashdata('message', 'Terimakasih telah melakukan pemilihan');
            return redirect()->to('votee');
        }
    }
}

// 7Y16A, 3D85W, 6R75F, 2Y50C, 2F26T, 4S84M, 2A45D, 7K64S, 6P92A, 5T22X, 6L91R, 8H28X, 7G83V, 5C70Y, 9C68M, 6D25N, 7S57J, 9P79H, 7E99H, 4B98M, 6R45G, 6K72L, 2K25B, 0I11U, 0I92A, 7J93C, 6O54Y, 7S29K, 1A73F, 8C34I, 1Q25A, 3C59F, 6B44A, 5V86K, 9W38P, 4W79I, 2N85S, 4S81H, 5V77S, 5I16C, 8B56Z, 8I87R, 6C81B, 3D95N, 6E24P, 2F79X, 7A10Z, 5P97M, 0A41X, 5Y57I, 7Z90V, 2A83I, 7X73I, 4H31K, 3Z49S, 0D21D, 6M82G, 8J27Q, 1Q79K, 4E75Q, 3E75H, 5K35S, 0H60O, 6G60M, 3Q46K, 1N70X, 8W57I, 7S18G, 2N56G, 4Q93P, 0P80B, 0Z41F, 6Z30E, 1V32U, 3P28L, 7C51F, 1R51Z, 2W33F, 6G63W, 8R84J, 4N15R, 1S89Y, 1M12C, 6A81S, 1V45K, 9Q77X, 6Y87G, 8I96S, 7F91I, 6C74W, 9W95Y, 2P97S, 7A22R, 2M88E, 2Y58X, 7T11G, 7K67L, 6H77C, 2Y44U, 9S69L, 9X41S, 7G94Y, 9F56C, 9G56B, 0V94N, 6E90N, 7E31T, 3A32O, 0V61X, 7G30X, 5E78R, 3K41I, 7P59G, 8Q21A, 6Z21T, 9N31F, 0V60C, 7W37P, 8H73Y, 1B29S, 7T69Q, 2D11I, 7S95Z, 7C73K, 6K88T, 6E69B, 1F87C, 7X37V, 9P66H, 8R48F, 9R61C, 8U24W, 5C70L, 5A57I, 4C74P, 1U25F, 8W93Z, 6W54U, 7S91A, 8M56V, 9M79Q, 9J12U, 9B91E, 5R94E, 8O39O, 6H90G, 1U19R, 9Z48I, 9K13Q, 7R51B, 8E56L, 2R71H, 0N43A, 4I31N, 2X20M, 7D85Q, 0N87R, 8V98U, 3F80V, 4M20V, 7W15W, 5U90R, 3I50F, 7H74U, 8Y14Q, 8A44F, 7G96K, 6V56T, 3A78Q, 5G90B, 7Z20J, 1Z22U, 9J87N, 1A33I, 5B48G, 2I85N, 1Q51V, 9L27C, 1E98G, 3Y63N, 1D43N, 1T37W, 3V20A, 4Q27R, 0E27Y, 0R23C, 4J27Z, 9J52L, 8V97J, 5D95E, 8K20P, 0R52E, 9H72X, 7C31H, 0O10D, 9C89B, 1Y33M, 3W28O, 1L60J, 0I35H, 4W46O, 1K12J, 1M74A, 0Q74Z, 2A16C, 7X80T, 1C79F, 9D18V, 3B69O, 1Q49A, 5N98D, 5Z89C, 0Q83V, 4Y45O, 6Q66H, 7O69D, 5O18K, 5N23U, 4K41R, 1T91A, 4D15G, 8A47B, 7O28P, 7B72Y, 7L43A, 4O48G, 5O91N, 9S70S, 1D37C, 4V73T, 0A71G, 3W81A, 7U22Y, 4B10J, 5K47L, 4O54N, 5T19C, 9Q73X, 1E48M, 8U59G, 6Y26O, 8N44D, 6C53L, 5R44G, 9R44Z, 3C84Q, 2D48L, 0G13Z, 0T93Z, 5I33J, 7L20K, 7P65T, 1P95P, 6X10R, 7Y92V, 8P48R, 0I16M, 1S35A, 2B52B, 6D55K, 9E47L, 4S61P, 7W28W, 4S92N, 3T63Z, 3R11H, 6T87C, 8L48G, 2U24L, 1O45M, 9A90U, 4W91R, 3J92A, 7Q26M, 1H98P, 0S22D, 2Y77U, 7I25P, 6A28F, 0S44M, 5X42U, 3W20U, 5G53P, 5L36C, 8Q49F, 9L14H, 5D67Y, 4U66A, 6I83M, 0L56K, 3G72F, 9X34Z, 3E11N, 3A56L, 6R85A, 1V19B, 0M77X, 6O46Y, 4H64P, 2Y24P, 7B89G, 6Z50U, 5I75C, 1V66X, 5K39H, 7P42Y, 1L25I, 4T19T, 2J42P, 1S54U, 6A92S, 3C79Y, 8O92L, 5A10A, 7W84I, 9D80S, 3C35T, 6S71N, 3E38K, 2K59A, 9K78Z, 9F75Q, 2X26J, 0C34V, 5Z80G, 8T31B, 2R13N, 0T40H, 1K92C, 7P66S, 0N18R, 8K12R, 7L45U, 9Y75W, 9Q53N, 6D11L, 1B52F, 7X83G, 2X90X, 0M27A, 1V42D, 8M45Q, 4D81Q, 3Q42T, 1F98F, 9B84C, 9N92F, 4W23K, 0A29J, 9D76D, 3J48L, 4S81W, 7V22U, 2Y42D, 9G31T, 2J35S, 1W63J, 5P48S, 1R16D, 4T28M, 7O80X, 3M35Q, 7S72E, 7Z14F, 2M35M, 2M40N, 7J80P, 4C26N, 8F11U, 9C84X, 4A22V, 6T33T, 2J65N, 6Z93L, 1K42C, 1V44G, 5U77X, 9J18F, 3T95O, 4A64C, 1V94A, 5M87D, 6M95Z, 8J31D, 2K34L, 0Y78U, 5A82K, 1U52S, 2T58R, 7W83B, 8F98Q, 7U84K, 3U39T, 8P15G, 9X69B, 9P93Q, 3S65Z, 0K68D, 5W34Z, 4Z15E, 4T29I, 6Q13I, 1F14A, 8H17R, 9A72J, 7Q72P, 1A47U, 7J21W, 2H35V, 2P96P, 9I56G, 4I64Y, 5G21I, 7W44S, 8Q47Q, 0M18R, 6I63I, 0D22T, 1L54J, 6D52K, 6D94U, 4I18G, 9L61U, 7L89I, 1O93E, 4D84T, 4W27M, 4B15Y, 5J93C, 7J34Z, 4I64O, 2X45H, 3N91P, 2A52S, 1V94S, 7Z45K, 3X92S, 4A79H, 4H15W, 1Y93A, 7X53V, 0Q29Q, 2I67W, 7U77D, 9K47N, 3T48G, 6K91X, 6M90M, 9J66Q, 7V63N, 5I60L, 6R42T, 3B41K, 5M97Y, 2D51J, 7Z68A, 0C35R, 3X57W, 8E42O, 2W57W, 4O28W, 7W16X, 8W54O, 9Z74K, 9G58L, 3S58C, 7H34O, 5T86K, 8G37Z, 2S76T