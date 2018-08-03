<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
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

    public function agence()
    {
        return $this->belongsTo('App\Models\Agence', 'agence_id');
    }
    public function Bus()
    {
        return $this->belongsTo('App\Models\Bus', 'bus_id');
    }
    public function hajs()
{
    return $this->hasMany('App\Models\Haj','group_id','id');
}
public function morshids()
{
    return $this->hasMany('App\Models\Morshid','group_id','id');
}

}
