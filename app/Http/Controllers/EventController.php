<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Resources\EventResource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {
        $events = Event::orderBy('date', 'desc')
            ->when($request->has('month'), function ($q) use ($request) {
                $q->where('date', 'LIKE', $request->month . '%');
            })->when($request->has('count'), function ($q) use ($request) {
                $q->limit($request->count);
            })
            ->get();

        return [
            'data' => EventResource::collection($events),
            'status' => true,
            'message' => count($events) > 0 ? 'All results retrieved' : 'No results',
        ];



    }

    public function getSortedByDate(Event $event)
    {
        return $event->getSortedByDate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, Event $event)
    {
        $event->image_link = 'uploads/'.$request->image->storeAs('events/images', time().'.'.$request->image->getClientOriginalExtension());
        $event->name = $request->name;
        $event->date = $request->date;

        if($event->save()) {
            return response()->json([ 'success' => true, 'message' => 'New publication added' ]);
        }
        return response()->json(['success' => false, 'message'=> 'Unsuccessful']);
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return EventResource
     */
    public function show(Event $event)
    {
        return new EventResource($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Event $event)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($event->image_link));
            $imageLink = 'uploads/'.$request->image->storeAs('events/images', time().'.'.$request->image->getClientOriginalExtension());
            $event->image_link = $imageLink;
        }
        $event->name = $request->name;
        $event->date = $request->date;

        if ($event->save()) {
            return response()->json(['success' => true, 'message' => 'Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Unsuccessful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return Response
     * @throws Exception
     */
    public function destroy(Event $event)
    {
        File::delete(public_path($event->image_link));
        $event->delete();
        return response()->json([ 'success' => true ]);
    }
}
