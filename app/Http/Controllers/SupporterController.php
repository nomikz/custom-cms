<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupporterResource;
use Illuminate\Http\Request;
use App\Supporter;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        $supporters = Supporter::all();
        if ($num = request()->get('count')) {
            return [
                'data' => SupporterResource::collection($supporters->take($num)),
                'status' => true,
                'message' => 'All results retrived'
            ];
        }
        return [
            'data' => SupporterResource::collection($supporters),
            'status' => true,
            'message' => 'All results retrived'
        ];


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
