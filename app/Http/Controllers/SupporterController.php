<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupporterResource;
use App\Result;
use Illuminate\Http\Request;
use App\Supporter;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class SupporterController extends Controller
{
    /**Controller
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {
        $supporters = Supporter::when($request->has('count'), function($q) use ($request) {
            $q->limit($request->count);
        })->get();

        return [
            'data' => SupporterResource::collection($supporters),
            'status' => count($supporters) > 0,
            'message' => count($supporters) > 0 ? 'All results retrieved' : 'No results',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, Supporter $supporter)
    {
        $supporter->filename = 'uploads/'.$request->image->storeAs('supporters/images', time().'.'.$request->image->getClientOriginalExtension());
        $supporter->title = $request->name;
        $supporter->link = $request->link;

        if($supporter->save()) {
            return response()->json([ 'success' => true, 'message' => 'New supporter added' ]);
        }
        return response()->json(['success' => false, 'message'=> 'Unsuccessful']);

    }

    /**
     * Display the specified resource.
     *
     * @param Supporter $supporter
     * @return SupporterResource
     */
    public function show(Supporter $supporter)
    {
        return new SupporterResource($supporter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Supporter $supporter)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($supporter->filename));
            $supporter->filename = 'uploads/'.$request->image->storeAs('supporters/images', time().'.'.$request->image->getClientOriginalExtension());
        }

        $supporter->link = $request->link;
        $supporter->title = $request->name;

        if ($supporter->save()) {
            return response()->json(['success' => true, 'message' => 'Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Unsuccessful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Supporter $supporter
     * @return Response
     * @throws \Exception
     */
    public function destroy(Supporter $supporter)
    {
        File::delete(public_path($supporter->filename));
        $supporter->delete();
        return response()->json([ 'success' => true ]);
    }
}
