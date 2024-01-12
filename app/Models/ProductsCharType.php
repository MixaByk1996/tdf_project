<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductsCharType extends Model
{
    use HasFactory;
    protected $table = 'products_char_type';
    protected $primaryKey = 'id';
    protected $fillable = [
        'characters_name',
    ];
    protected $guarded = [
        '_method',
        '_token'
    ];
}