<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CenterCard extends Model
{
    protected $fillable = ['img'];
    
    function user()
        {
        return $this->hasOne('App\User','id', 'created_by');
        }
}
