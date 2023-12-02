<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'block'            => $this->block,
            'mobile'           => $this->mobile,
            'email'            => $this->email,
            'mobile_verify_at' => $this->mobile_verify_at,

        ];
    }
}
