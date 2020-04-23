<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticContent extends Model
{
    protected $hidden = ['updated_at', 'created_at', 'id'];

    protected $fillable = ['key', 'value'];
}
