<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResultResource;
use App\Result;
use App\StaticContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'data' => ResultResource::collection(Result::get()),
            'status' => true,
            'message' => 'All results retrived'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * $filename = substr($request->input('date'), 0, 10) . '.' . $request->file('image')->getClientOriginalExtension();
       $link = Storage::url($request->image->storeAs('tournament-results', $filename));
       $link = str_ireplace(env('APP_URL'), '', $link);
       Storage::delete($link);
       dd($link);
     *
     *
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Result $result)
    {
        // download_link
        // image_link
        $result->title = $request->title;
        $result->date = $request->date;
        $result->content = addslashes($request->content); //stripslashes()
        $result->slug = Str::slug($request->title, '-');;



        $imageName = substr($request->input('date'), 0, 10);
        $imageName .= '.' . $request->file('image')->getClientOriginalExtension();
        $result->image_link = Storage::url($request->image->storeAs('tournament-results/img', $imageName));

        $fileNme = substr($request->input('date'), 0, 10);
        $fileNme .= '.' . $request->file('image')->getClientOriginalExtension();
        $result->download_link = Storage::url($request->document->storeAs('tournament-results/doc', $fileNme));

        if($result->save()) {
            return response()->json([ 'success' => true, 'message' => 'New publication added' ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ResultResource
     */
    public function show(Result $result)
    {
        return new ResultResource($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();
        return response()->json([ 'success' => true ]);
    }
}
