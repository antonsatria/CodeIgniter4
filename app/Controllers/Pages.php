<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Palagan No. 14',
                    'kota' => 'Yogyakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Nakula No.3',
                    'kota' => 'Yogyakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}


