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

    public function regional()
    {
        return $this->belongsTo('App\Regional', 'regional_id', 'id');
    }
}
