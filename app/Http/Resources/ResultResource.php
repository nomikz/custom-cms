<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            'slug' => $this->slug,
            'title' => $this->title,
            'body' => $this->content,
            'download_link' => env('APP_URL'). '/' . $this->download_link,
            'filename' => env('APP_URL'). '/' . $this->image_link,
            'date' => $this->date,
        ];
    }
}
