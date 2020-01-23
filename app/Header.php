<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    
    protected $fillable = ['name'];

    function user()
        {
        return $this->hasOne('App\User','id', 'created_by');
        }
}
