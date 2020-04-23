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
            'image_url' => $this->image_url,
            'regional' => new RegionalResource($this->whenLoaded('regional'))
        ];
    }
}
