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

        $evensByDate = [];

        foreach ($dates as $date) {
            $eventsOfTheDate = $events
                ->where('date', '>=', $date . ' 00:00:00')
                ->where('date', '<', $date . ' 23:59:59')
                ->sortByDesc('date');

            $evensByDate[] = [
                'date' => $date,
                'events' => EventResource::collection($eventsOfTheDate)
            ];
        }
        return response()->json(['data' => $evensByDate, 'success' => true]);
    }

}
