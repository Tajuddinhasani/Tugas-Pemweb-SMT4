<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    //bisa dilihat pada web condigniter
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $usetimestamps = true;

    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getBuku($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}