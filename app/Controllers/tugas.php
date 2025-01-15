<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\TugasModel;

class tugas extends BaseController
{
    protected $TugasModel;

    public function __construct() {
        $this->TugasModel = new TugasModel();
    }

    public function tugas()
    {
        $buku = $this->TugasModel->findAll();

       $data = [
        'title' => 'daftar buku',
        'buku' => $buku
       ];
        return view('tugas', $data);
    }

    public function tambah(){
        $data = [
            'title' => 'daftar buku',
        ];
        return view('tambah_tugas' ,  $data);
    }
    
    public function save(){
        dd($this->request->getVar());
    }
}

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

