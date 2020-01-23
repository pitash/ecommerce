<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    function user()
        {
        return $this->hasOne('App\User','id', 'created_by');
        }

    function mParent()
        {
        return $this->belongsTo('App\Header','parent');
        }    
}
