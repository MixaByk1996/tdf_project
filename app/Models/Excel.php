<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    use HasFactory;

    protected $table = 'excel';
    protected $fillable = [
        'name',
        'photo_url',
        'article',
        'description'
    ];
}
