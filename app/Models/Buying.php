<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    use HasFactory;
    protected $table = 'buyings';
    protected $guarded = [];

    function Book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
