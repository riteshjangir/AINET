<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Database\Eloquent\Model;

// class Individual extends Model
// {
//     //
// }
class Individual extends Authenticatable
    {
        // use Notifiable;
        protected $guarded = ['id'];


        // protected $guard = 'individuals';

        // protected $fillable = [
        //     'name', 'email', 'ind_password',
        // ];

        protected $hidden = [
            'ind_password', 'remember_token',
        ];
        public function getAuthPassword()
        {
         return $this->ind_password;


        }

    }
