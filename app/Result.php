<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'download_link',
        'image_link',
    ];
}
