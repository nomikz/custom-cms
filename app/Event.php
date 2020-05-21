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
        $events = Event::orderBy('date', 'desc')->get();

        $dates = $events->map(function ($event) {
            return explode(' ', $event->date)[0];
        })->unique();

        $response = [];

        foreach ($dates as $date) {
            var_dump($date);
            $response[] = [
                'date' => $date,
                'events' => EventResource::collection($events->where('date', $date)->sortByDesc('date'))
            ];
        }

        return response()->json(['data' => $response, 'success' => true]);
    }

}
