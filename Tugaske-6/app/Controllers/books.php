<?php

namespace App\Controllers;

use App\Models\BooksModel;

class Books extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BooksModel();
    }
    public function buku()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->findAll() // asumsi $bukuModel berisi data buku dari model
        ];


        return view ('books/index', $data);
    }
}