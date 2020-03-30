<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey='id';
    protected $table = 'users';
    protected $fillable = [
        'id', 'password', 'avatar', 'no_hp', 'tanggal_lahir', 
    ];
}