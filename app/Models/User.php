<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $cast = [
        'email_verified_at' => 'datetime',
    ];
}
