<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RplActivity extends JsonResource
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
            'photo' => $this->photo,
            'title' => $this->title,
            'description' => $this->description,
            'textIndication' => $this->textIndication,
            'status' => $this->status,

        ];        
    }
}

