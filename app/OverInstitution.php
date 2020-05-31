<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OverInstitution extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'created_at', 'updated_at'
    ];
}
