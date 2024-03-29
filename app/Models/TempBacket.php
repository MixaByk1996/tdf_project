<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempBacket extends Model
{
    use HasFactory;
    protected $table = 'temp_backet';

    protected $fillable = ['product_id', 'count', 'ip'];
    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Products::class);
    }


}
