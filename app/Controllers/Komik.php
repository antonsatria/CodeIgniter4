<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;
    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->KomikModel->getKomik()
        ];


        // cara konek ke database model


        return view('komik/index', $data);
    }


    public function detail($slug)
    {
        $komik = $this->KomikModel->getKomik($slug);
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik'
        ];

        return view('komik/create', $data);
    }
}
