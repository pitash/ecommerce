<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    
    function user()
        {
        return $this->hasOne('App\User','id', 'created_by');
        }

    function mParent()
        {
        return $this->belongsTo('App\Header','parent');
        }
    
    function cate()
        {
        return $this->belongsTo('App\Category','category');
        }    
}
