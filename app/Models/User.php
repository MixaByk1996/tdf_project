<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'fio',
        'email',
        'phone',
        'city',
        'is_admin',
        'balance',
        'password'
    ];
    protected $guarded = [
        '_method',
        '_token'
    ];

    public function backets(){
        return $this->hasMany(Backet::class, 'user_id');
    }
}
