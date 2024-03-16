<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
    public function kontak()
{
    $data = [
        'title' => 'Tentang | Unipdu Press',
        'alamat' => [
            ['tipe' => 'alamat rumah', 'alamat' => 'kanjar pangilen', 'kota' => 'Sampang']
        ]
    ];
    echo view('layout/header', $data);
    echo view('pages/kontak', $data); // Mengirimkan $data ke tampilan kontak.php
    echo view('layout/footer');
}

}