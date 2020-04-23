<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClubResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'site' => $this->site,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'region' => new RegionResource($this->whenLoaded('region')),
        ];
    }
}
