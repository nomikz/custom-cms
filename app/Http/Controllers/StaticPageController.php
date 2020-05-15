<?php

namespace App\Http\Controllers;

use App\Http\Resources\StaticPageResource;
use App\Result;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaticPageController extends Controller
{

    public function show(Request $request)
    {
        $page = $request->page;
        $section = $request->section;

        $staticPage = StaticPage::where('page', 'LIKE', '%' . $page . '%')
            ->where('section', 'LIKE', '%' . $section . '%')
            ->first();

        return [
            'data' => new StaticPageResource($staticPage),
            'status' => true,
            'message' => 'All results retrieved',
        ];
    }




    public function getAvailable(Request $request)
    {
        $sectionNames = StaticPage::where('page', 'LIKE', '%' . $request->page . '%')
            ->where('is_visible', true)
            ->get(['is_visible', 'title', 'section']);

        return [
            'data' => $sectionNames,
            'status' => true,
            'message' => 'All results retrieved',
        ];
    }


    public function update(Request $request)
    {
        $page = $request->page;
        $section = $request->section;

        $staticPage = StaticPage::where('page', $page)
            ->where('section', $section)
            ->first();

        if ($request->has('uploadedDocument') && !(filter_var($request->documentNotNeeded, FILTER_VALIDATE_BOOLEAN))) {
            File::delete(public_path($staticPage->document_link));
            $documentLink = 'uploads/'.$request->uploadedDocument->storeAs('static/documents', $page. '-' . $section . '.'.$request->uploadedDocument->getClientOriginalExtension());
            $staticPage->document_link = $documentLink;
            $staticPage->document_name = $request->document_name;
        }

        if (filter_var($request->documentNotNeeded, FILTER_VALIDATE_BOOLEAN)) {
            File::delete(public_path($staticPage->document_link));
            $staticPage->document_link = '';
            $staticPage->document_name = '';
        }


        $staticPage->title = $request->title;
        $staticPage->text = $request->text;
        $staticPage->is_visible = filter_var($request->is_visible, FILTER_VALIDATE_BOOLEAN);
        $staticPage->phone = $request->phone;
        $staticPage->email = $request->email;
        $success = $staticPage->save();

        return response()->json(['success' => $success]);
    }
}
