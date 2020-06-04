<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Database\Eloquent\Model;

// class Individual extends Model
// {
//     //
// }
class OverInstitution extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'overinstitution';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
