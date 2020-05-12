<?php

namespace App\Http\Resources;

use App\Regional;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RegionalResource;

class MemberResource extends JsonResource
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
            'title' => $this->title,
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => env('APP_URL'). '/' . $this->image_url,
            'region' => new RegionResource($this->whenLoaded('region'))
        ];
    }
}
