<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemberResource;
use App\Member;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {
        if ($request->has('region')) {
            $members = Region::where('name', 'LIKE', '%'. $request->region .'%')->first()->members;
        } else {
            $members = Member::get();
        }

        return [
            'data' => MemberResource::collection($members),
            'status' => count($members) > 0,
            'message' => count($members) > 0 ? 'All results retrieved' : 'No results',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Member $member)
    {
        $member->image_url = 'uploads/'.$request->image->storeAs('members/images', time().'.'.$request->image->getClientOriginalExtension());

        $member->name = $request->name;
        $member->title = $request->title;
        $member->region_id = $request->region;
        $member->description = $request->description;

        if ($member->save()) {
            return response()->json(['success' => true, 'message' => 'Success']);
        }
        return response()->json(['success' => false, 'message' => 'Fail']);
    }

    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @return MemberResource
     */
    public function show(Member $member)
    {
        return new MemberResource($member->load('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Member $member
     * @return Response
     */
    public function update(Request $request, Member $member)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($member->image_url));
            $member->image_url = 'uploads/'.$request->image->storeAs('members/images', time().'.'.$request->image->getClientOriginalExtension());
        }

        $member->name = $request->name;
        $member->title = $request->title;
        $member->region_id = $request->region;
        $member->description = $request->description;

        if($member->save()) {
            return response()->json(['success' => true, 'message' => 'Success']);
        }
        return response()->json(['success' => false, 'message' => 'Fail']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $member
     * @return void
     * @throws \Exception
     */
    public function destroy(Member $member)
    {
        File::delete(public_path($member->image_url));
        $member->delete();
        return response()->json(['success' => true]);
    }
}
