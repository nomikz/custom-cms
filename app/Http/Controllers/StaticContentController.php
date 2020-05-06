<?php

namespace App\Http\Controllers;

use App\StaticContent;
use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function get(Request $request)
    {
        $collection = StaticContent::when($request->page === 'regional', function ($q) {
                $q->whereIn('key', ['regional_page_short_description', 'regional_information']);
            })
            ->get();

        $data = [];

        foreach($collection as $item) {
            $data[$item->key] = $item->value;
        }

        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
//        return StaticContent;
    }

}
