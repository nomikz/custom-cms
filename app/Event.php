<?php

namespace App;

use App\Http\Resources\EventResource;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'image_link',
        'date'
    ];

    protected $hidden = ['updated_at', 'created_at'];

    public function getSortedByDate()
    {
        $events = Event::all();

        $dates = $events->map(function ($event) {
            return $event->date;
        })->unique();

        $response = [];

        foreach ($dates as $date) {
            $response[] = [
                'date' => $date,
                'events' => EventResource::collection($events->where('date', $date)->all())
            ];
        }

        return response()->json(['data' => $response, 'success' => true]);
    }

}