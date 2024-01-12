<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsCharValue extends Model
{
    use HasFactory;
    protected $table = 'products_char_values';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_char_type_id',
        'product_id',
        'char_value',
    ];
    protected $guarded = [
        '_method',
        '_token'
    ];
}
