<?php

namespace App\Http\Controllers;

use App\StaticContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaticContentController extends Controller
{
    public function get(Request $request)
    {
        if($request->page === 'governance') {
            $page = 'governance';
        } elseif ($request->page === 'about_us') {
            $page = 'about';
        }
        $collection = StaticContent::where('key', 'LIKE', $page . '%')->get();

        $data = [];

        foreach($collection as $item) {
            $data[$item->key] = $item->value;
        }

        return response()->json(['data' => $data]);
    }


    public function update(Request $request)
    {
        $row = StaticContent::where('key', $request->parameter)->first();
        $row->value = $request->value;
        $row->save();

        return response()->json(['success' => true]);
    }



    public function updateDocument(Request $request)
    {

        $policyLink = StaticContent::where('key', 'governance_page_policy_document_link_location')->first();
        File::delete(public_path($policyLink->value));

        $policyLink->value = 'uploads/'.$request->document->storeAs('policy', time().'.'.$request->document->getClientOriginalExtension());
        $policyLink->save();

        $policyDomumentText = StaticContent::where('key', 'governance_page_policy_document')->first();
        $policyDomumentText->value = $request->governance_page_policy_document;
        $policyDomumentText->save();

    }
}
