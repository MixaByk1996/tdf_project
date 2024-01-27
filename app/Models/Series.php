<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property-read mixed $products
 */
class Series extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $fillable = ['name'];

    public function products(){
        return $this->hasMany(\Products::class, 'serial_id');
    }
}
