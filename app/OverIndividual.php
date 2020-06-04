<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Database\Eloquent\Model;

// class Individual extends Model
// {
//     //
// }
class OverIndividual extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'overindividual';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
