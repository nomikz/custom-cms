<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'title',
        'name',
        'description',
        'image_url',
        'regional_id',
    ];

    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id', 'id');
    }
}
