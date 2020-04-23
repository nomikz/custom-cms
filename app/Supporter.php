<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    protected $fillable = ['title', 'filename', 'link'];
}
