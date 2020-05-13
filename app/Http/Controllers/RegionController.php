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
        $regions = Region::get();

        return [
            'data' => RegionResource::collection($regions),
            'status' => count($regions) > 0,
            'message' => count($regions) > 0 ? 'All results retrieved' : 'No results',
        ];
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
        $region->name = $request->title;
        $region->slug = Str::slug($request->title, '-');
        $region->description = 'not needed yet'; // to remove to do
        $region->content = $request->content;
        $region->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }
}
