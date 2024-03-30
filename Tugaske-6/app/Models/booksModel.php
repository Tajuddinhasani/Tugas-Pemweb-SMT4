<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    //bisa dilihat pada web condigniter
    protected $table      = 'books';
    protected $primaryKey = 'id';
    protected $usetimestamps = true;
}