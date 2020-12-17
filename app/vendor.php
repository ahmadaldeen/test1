<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class vendor extends Authenticatable
{
    protected $fillable = [
        'name', 'userName', 'password',
    ];
}
