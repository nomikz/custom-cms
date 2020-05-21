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
            return $event->getOnlyDate();
        })->unique();

        $eventsByDate = [];

        foreach ($dates as $date) {
            $eventsOfTheDate = $events->filter(function($event) use ($date) {
                return $event->getOnlyDate() === $date;
            });

            $eventsByDate[] = [
                'date' => $date,
                'events' => EventResource::collection($eventsOfTheDate)
            ];
        }
        return response()->json(['data' => $eventsByDate, 'success' => true]);
    }


    private function getOnlyDate() : string
    {
        return explode(' ', $this->date)[0];
    }

}
