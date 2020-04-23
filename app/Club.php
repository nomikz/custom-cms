<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'description',
        'phone_number',
        'email',
        'site',
        'latitude',
        'longitude',
        'region_id',
    ];

    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id');
    }
}
