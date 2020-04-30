<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ClubResource;
use App\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ClubResource::collection(Club::with('region')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Club $club)
    {
        $club->description = $request->description;
        $club->site = $request->site;
        $club->phone_number = $request->phone_number;
        $club->email = $request->email;
        $club->region_id = $request->region_id;
        $club->latitude = $request->latitude;
        $club->longitude = $request->longitude;
        if ($club->save()) {
            return response()->json(['success' => true, 'message' => 'Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Unsuccessful']);
    }

    /**
     * Display the specified resource.
     *
     * @param Club $club
     * @return ClubResource
     */
    public function show(Club $club)
    {
        return new ClubResource($club->load('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Club $club
     * @return void
     */
    public function update(Request $request, Club $club)
    {
        $club->description = $request->description;
        $club->site = $request->site;
        $club->phone_number = $request->phone_number;
        $club->region_id = $request->region_id;
        $club->latitude = $request->latitude;
        $club->longitude = $request->longitude;

        if ($club->save()) {
            return response()->json(['success' => true, 'message' => 'Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Unsuccessful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Club $club
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Club $club)
    {
        $club->delete();
        return response()->json(['success' => true]);
    }
}
