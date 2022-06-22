<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $guarded = [];

    function Buying()
    {
        return $this->hasMany(Buying::class, 'book_id', 'id');
    }

    function Selling()
    {
        return $this->hasMany(Selling::class, 'book_id', 'id');
    }
}
