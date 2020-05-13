<?php

namespace App\Http\Controllers;

use App\GovernanceMember;
use App\Http\Resources\GovernanceMemberResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class GovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        $governanceMembers = GovernanceMember::get();

        return [
            'data' => GovernanceMemberResource::collection($governanceMembers),
            'status' => count($governanceMembers) > 0,
            'message' => count($governanceMembers) > 0 ? 'All results retrieved' : 'No results',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param GovernanceMember $governanceMember
     * @return void
     */
    public function store(Request $request, GovernanceMember $governanceMember)
    {
        $governanceMember->image_url = 'uploads/'.$request->image->storeAs('governance-members/images', time().'.'.$request->image->getClientOriginalExtension());

        $governanceMember->name = $request->name;
        $governanceMember->title = $request->title;
        $governanceMember->email = $request->email;
        $governanceMember->description = $request->description;

        if ($governanceMember->save()) {
            return response()->json(['success' => true, 'message' => 'Success']);
        }
        return response()->json(['success' => false, 'message' => 'Fail']);
    }

    /**
     * Display the specified resource.
     *
     * @param GovernanceMember $governanceMember
     * @return GovernanceMemberResource
     */
    public function show(GovernanceMember $governanceMember)
    {
        return new GovernanceMemberResource($governanceMember);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param GovernanceMember $governanceMember
     * @return Response
     */
    public function update(Request $request, GovernanceMember $governanceMember)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($governanceMember->image_url));
            $governanceMember->image_url = 'uploads/'.$request->image->storeAs('governance-members/images', time().'.'.$request->image->getClientOriginalExtension());
        }

        $governanceMember->name = $request->name;
        $governanceMember->title = $request->title;
        $governanceMember->email = $request->email;
        $governanceMember->order_number = 2;
        $governanceMember->description = $request->description;

        if($governanceMember->save()) {
            return response()->json(['success' => true, 'message' => 'Success']);
        }
        return response()->json(['success' => false, 'message' => 'Fail']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param GovernanceMember $governanceMember
     * @return Response
     * @throws \Exception
     */
    public function destroy(GovernanceMember $governanceMember)
    {
        File::delete(public_path($governanceMember->image_url));
        $governanceMember->delete();
        return response()->json(['success' => true]);
    }
}
