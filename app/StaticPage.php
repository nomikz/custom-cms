<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $guarded = ['page', 'section'];
}
