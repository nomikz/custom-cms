<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionResource;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'data' => RegionResource::collection(Region::get()),
            'status' => true,
            'message' => 'All results retrieved'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, Region $region)
    {
        $region->image_link = 'uploads/'.$request->image->storeAs('regions/images', time().'.'.$request->image->getClientOriginalExtension());

        $region->name = $request->title;
        $region->slug = Str::slug($request->title, '-');
        $region->description = $request->description;
        $region->content = $request->content;

        if($region->save()) {
            return response()->json([ 'success' => true, 'message' => 'New publication added' ]);
        }
        return response()->json(['success' => false, 'message'=> 'Unsuccessful']);
    }

    /**
     * Display the specified resource.
     *
     * @param Region $region
     * @return RegionResource
     */
    public function show(Region $region)
    {
        return new RegionResource($region);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Region $region
     * @return Response
     */
    public function update(Request $request, Region $region)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($region->image_link));
            $region->image_link = 'uploads/'.$request->image->storeAs('regions/images', time().'.'.$request->image->getClientOriginalExtension());
        }

        $region->name = $request->title;
        $region->slug = Str::slug($request->title, '-');
        $region->description = $request->description;
        $region->content = $request->content;
        $region->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Region $region
     * @return void
     * @throws \Exception
     */
    public function destroy(Region $region)
    {
        File::delete(public_path($region->image_link));
        $region->delete();
        return response()->json([ 'success' => true ]);
    }
}
