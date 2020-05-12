<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GovernanceMemberResource extends JsonResource
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
            'order_number' => $this->order_number,
            'description' => $this->description,
            'image_url' => env('APP_URL'). '/' . $this->image_url,
            'email' => $this->email,
        ];
    }
}
