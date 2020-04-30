<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image_link',
    ];

    public function clubs()
    {
        return $this->hasMany('App\Club', 'region_id');
    }

    public function members()
    {
        return $this->hasMany('App\Member', 'region_id');
    }
}
