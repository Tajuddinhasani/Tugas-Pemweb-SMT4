<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "Nama: Tajuddin Hasani zamzami
        Umur:23
        Alamat:Sampang
        pekerjaan:Mahasiswa
        NIM:4122058
        Prodi:Sistem Informasi";
    }
}