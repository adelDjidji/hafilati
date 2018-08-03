<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
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

public function agences()
{
    return $this->hasMany('App\Models\Agence','country_id','id');
}
public function morshids()
{
    return $this->hasMany('App\Models\Morshid','country_id','id');
}
public function hajs()
{
    return $this->hasMany('App\Models\Haj','country_id','id');
}

}
