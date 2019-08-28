<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','first_name', 'last_name', 'username', 'email', 'university',
         'deparment', 'semester','courses'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        ''
    ];
}