<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use App\Models\ProductModel;
use CodeIgniter\Model;

class Product extends BaseController
{
    protected $produk;

    public function __construct()
    {
        $this->produk=new Buku();
    }
    public function index()
    {
        return view('layout/product');
    }

    public function halaman_tambah()
    {
        echo view('layout/tambah'); 

    }
    public function halaman_hapus()
    {
        echo view('layout/hapus'); 

    }
    public function halaman_edit()
    {
        echo view('layout/edit'); 

    }
    public function tambah()
    {
        $query=$this->request->getPost();
        $data= [
            "judul"=>$query["judul"],
            "penulis"=>$query["penulis"],
            "penerbit"=>$query["penerbit"],
            "tahun_terbit"=>$query["tahun_terbit"],
        ];
        $this->produk->save($data);
    }
    public function perbarui($id_buku)
    {

        $data=$this->request->getPost();
        if(!empty($data["judul"])){
            $kueri["judul"]=$data["judul"];
        }
        if(!empty($data["penulis"])){
            $kueri["penulis"]=$data["penulis"];
        }
        if(!empty($data["penerbit"])){
            $kueri["penerbit"]=$data["penerbit"];
        }
        if(!empty($data["tahun_terbit"])){
            $kueri["tahun_terbit"]=$data["tahun_terbit"];
        }

        $konfirm= $this->produk->find($data);
        if($konfirm){
            $this->produk->update($id_buku, $kueri);
            return response()->setJSON($data);
        }
    }

    public function tampil()
    {
        $data=$this->produk->findAll();

        $hasil=[
            "hasil"=>$data
        ];
        echo view("layout/product", $hasil);
    }
    public function hapusPermanen($kd_product)
    {
        $konfirm= $this->produk->find($kd_product);
        if($konfirm){
            $this->produk->delete($kd_product, true);
            return "wes tak hapus";
        }else{
            echo "ra enek seng kui";
        }
        
    }
}
