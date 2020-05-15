<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaticPageResource extends JsonResource
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
            'is_visible' => $this->is_visible,
            'title' => $this->title,
            'text' => $this->text,
            'phone' => $this->phone,
            'email' => $this->email,
            'document_link' => $this->document_link,
            'document_name' => $this->document_name,
        ];
    }
}
