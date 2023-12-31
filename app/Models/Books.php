<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function author(){
        return $this->belongsToMany(Authors::class,'books_has_author', 'books_id', 'author_id');
    }
}
