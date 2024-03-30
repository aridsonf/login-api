<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            $this->mergeWhen($this->showId ?? false, [
                'id' => $this->id,
            ]),
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
        ];
    }
}
