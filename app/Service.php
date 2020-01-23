<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    function user()
        {
        return $this->hasOne('App\User','id', 'created_by');
        }
}
