<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'content',
    ];

    public function members()
    {
        return $this->hasMany('App\Member', 'regional_id', 'id');
    }
}
