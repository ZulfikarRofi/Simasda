<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

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
