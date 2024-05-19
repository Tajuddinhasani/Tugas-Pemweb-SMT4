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
    public function index()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getBuku() // asumsi $bukuModel berisi data buku dari model
        ];
        return view('books/index', $data);
    }

    public function detail($slug)
    {
        $books = $this->bukuModel->getBuku($slug);
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        // jika komik tidak ada di tabel
        if (empty($data['books'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul buku ' . $slug . ' tidak ditemukan.');
        }
        return view('books/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Buku'
        ];

        return view('books/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' > $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/books');

    }
}