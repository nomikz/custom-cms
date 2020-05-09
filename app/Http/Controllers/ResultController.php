<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResultResource;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
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
            'data' => ResultResource::collection(Result::orderBy('date', 'desc')->get()),
            'status' => true,
            'message' => 'All results retrieved'
        ];
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, Result $result)
    {
        $result->title = $request->title;
        $result->date = $request->date;
        $result->content = addslashes($request->content); //stripslashes()
        $result->slug = Str::slug($request->title, '-');;

        $result->image_link = 'uploads/'.$request->image->storeAs('results/images', time().'.'.$request->image->getClientOriginalExtension());
        $result->download_link = 'uploads/'.$request->document->storeAs('results/documents', time().'.'.$request->document->getClientOriginalExtension());

        if($result->save()) {
            return response()->json([ 'success' => true, 'message' => 'New publication added' ]);
        }
        return response()->json(['success' => false, 'message'=> 'Unsuccessful']);
    }

    /**
     * Display the specified resource.
     *
     * @param Result $result
     * @return ResultResource
     */
    public function show(Result $result)
    {
        return new ResultResource($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Result $result
     * @return void
     */
    public function update(Request $request, Result $result)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($result->image_link));
            $imageLink = 'uploads/'.$request->image->storeAs('results/images', time().'.'.$request->image->getClientOriginalExtension());
            $result->image_link = $imageLink;
        }

        if ($request->hasFile('document')) {
            File::delete(public_path($result->download_link));
            $downloadLink = 'uploads/'.$request->document->storeAs('results/documents', time().'.'.$request->document->getClientOriginalExtension());
            $result->download_link = $downloadLink;
        }

        $result->title = $request->title;
        $result->date = $request->date;
        $result->content = $request->content;
        $result->slug = Str::slug($request->title, '-');;
        if ($result->save()) {
            return response()->json(['success' => true, 'message' => 'Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Unsuccessful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Result $result
     * @return Response
     * @throws \Exception
     */
    public function destroy(Result $result)
    {
        File::delete(public_path($result->download_link));
        File::delete(public_path($result->image_link));
        $result->delete();
        return response()->json([ 'success' => true ]);
    }
}
