<?php

namespace App\Models;

class User extends Base
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'avatar', 'active', 'created_at'
    ];

}
