<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agence extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
protected $dates = ['deleted_at'];
    /**
    * The attributes that can't be fillable.
    *
    * @var array
    */
protected $guarded = ['id', 'created_at', 'updated_at'];

public function groups()
{
    return $this->hasMany('App\Models\Group','agence_id','id');
}

public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
