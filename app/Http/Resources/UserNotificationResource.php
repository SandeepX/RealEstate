<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserNotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id"              => $this->id,
            "type"            => $this->type,
            "data"            => $this->data,
            "read_at"         => $this->read_at,
            "created_at"      => $this->created_at->format('Y-m-d H:i:s'),
            "updated_at"      => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}


