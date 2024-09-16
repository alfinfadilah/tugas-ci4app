<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku as ModelsBuku;
use CodeIgniter\HTTP\ResponseInterface;

class Buku extends BaseController
{
    protected $buku;
    public function __construct()
    {
        $this->buku= new ModelsBuku();
    }
    public function index()
    {
        return view('layout/v_buku');
    }
    public function tambah()
    {
        $query= $this->request->getPost();
        $this->buku->save($query);
    }
    public function muncul()
    {
        $data=$this->buku->findAll();
        $hasil=
        [
            "hasil"=>$data
        ];
        echo view('v_buku',$hasil);
    }
}
