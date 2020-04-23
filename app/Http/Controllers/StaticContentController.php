<?php

namespace App\Http\Controllers;

use App\StaticContent;
use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function aboutPage()
    {
        return StaticContent::whereIn('key', ['about-page_description', 'about-page_what_we_do'])->get();
    }
}
