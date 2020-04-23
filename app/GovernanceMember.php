<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GovernanceMember extends Model
{
    protected $fillable = [
        'title',
        'name',
        'description',
        'image_url',
        'email',
    ];
}
